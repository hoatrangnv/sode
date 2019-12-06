<?php

namespace App\Http\Controllers;

use App\Bankers;
use App\Config;
use App\Posts;
use Illuminate\Http\Request;

// use Lullabot\AMP\AMP;
// use Lullabot\AMP\Validate\Scope;

class MainController extends Controller
{

    /**
     * Get home page
     */
    public function getHome()
    {
        $bankersModel = new Bankers();
        $top10banker = $bankersModel->top10();
        $this->data['top10banker'] = $top10banker;

        $postsModel = new Posts();
        $news = $postsModel->getListPostByType(0);
        $this->data['news'] = $news;

        $list = [
            [config('config.cate')[4], config('config.cate_name')[4], $postsModel->getListPostByType(4)],
            [config('config.cate')[2], config('config.cate_name')[2], $postsModel->getListPostByType(2)],
            [config('config.cate')[3], config('config.cate_name')[3], $postsModel->getListPostByType(3)],
            [config('config.cate')[5], config('config.cate_name')[5], $postsModel->getListPostByType(5)],
        ];
        $this->data['list'] = $list;

        return $this->checkamp('frontend.index');
    }

    /**
     * Get cate page
     */
    public function getCate($cate)
    {
        $bankersModel = new Bankers();
        $top10banker = $bankersModel->top10();
        $this->data['top10banker'] = $top10banker;

        $postsModel = new Posts();
        $promotion = $postsModel->getListPostLimit(6, 10);
        $this->data['promotion'] = $promotion;

        $listpost = $postsModel->getListPostLimitOffset(array_search($cate, config('config.cate')), 10, 0);
        $this->data['listpost'] = $listpost;

        $totalpost = $postsModel->countPostByType(array_search($cate, config('config.cate')));
        $this->data['totalpost'] = $totalpost;

        $this->data['cate'] = $cate;

        $this->data['cateName'] = config('config.cate_name')[array_search($cate, config('config.cate'))];

        config(['config.title' => config('config.cate_title')[array_search($cate, config('config.cate'))], 'config.description' => config('config.cate_description')[array_search($cate, config('config.cate'))]]);

        return $this->checkamp('frontend.blog');
    }

    /**
     * Get more post
     */
    public function getMorePost(Request $request, $cate)
    {

        $postsModel = new Posts();
        $offset = (int) $request->input('offset');
        $listpost = $postsModel->getListPostLimitOffset(array_search($cate, config('config.cate')), 10, $offset);
        $html = "";

        foreach ($listpost as $item) {
            $html .= '<div class="row mb-3"><div class="col-md-5 col-5"><a title="' . $item->title . '" href="' . route('getPost', ['slug' => $item->slug]) . '"> <img class="img img-fluid" src="' . 'public/img/post/' . $item->cover . '" alt="' . $item->title . '"></a></div><div class="col-md-7 col-7 pl-0"><h3><a title="' . $item->title . '" href="' . route('getPost', ['slug' => $item->slug]) . '">' . $item->title . '</a> </h3><div class="des-cat d-none d-md-block"><p></p><p>' . $item->description . '</p><p></p></div></div></div>';
        }

        return $html;
    }

    /**
     * Get post page
     */
    public function getPost($slug)
    {
        $bankersModel = new Bankers();
        $top10banker = $bankersModel->top10();
        $this->data['top10banker'] = $top10banker;

        $postsModel = new Posts();
        $promotion = $postsModel->getListPostLimit(6, 10);
        $this->data['promotion'] = $promotion;

        $post = $postsModel->getPostBySlug($slug);
        $this->data['post'] = $post;

        if($post){

            $postRelated = $postsModel->getListPostByTypeRelate($post->type, $slug);
            $this->data['postRelated'] = $postRelated;

            config(['config.title' => $post->title, 'config.description' => $post->description]);
            return $this->checkamp('frontend.single');
        }else{
            return redirect()->route('getHome');
        }
    }

    public function checkamp($viewfile){
        if(config('config.amp') == 1){
            return preg_replace_callback('/<img[^>]*src="([^"]*)"[^>]*>/', function($found){
                $size = getimagesize(url(trim($found[1])));
                return '<amp-img src="'.$found[1].'" width="'.$size[0].'" height="'.$size[1].'" layout="responsive" alt="AMP"></amp-img>';
            } , view($viewfile, $this->data));
        }else{
            return view($viewfile, $this->data);
        }
    }

}