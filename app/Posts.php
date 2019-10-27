<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
  protected $table = 'posts';

  public function insertPost($data){
  	return Posts::insert($data);
  }

  public function updatePost($id,$data){
  	return Posts::where('id', '=', $id)->update($data);
  }

  public function getPostById($id){
  	return Posts::where('id', '=', $id)->first();
  }
  public function getPostBySlug($slug){
    return Posts::where('slug', '=', $slug)->first();
  }
  public function getPostByTypeSlug($type,$slug){
    return Posts::where('slug', '=', $slug)->where('type', '=', $type)->first();
  }

  public function getListPost(){
  	return Posts::orderBy('pos', 'asc')->orderBy('created_at','desc')->get();
  }
  public function getListPostByType($type){
    return Posts::where('type', '=', $type)->orderBy('pos', 'asc')->orderBy('created_at','desc')->get();
  }
  public function getListPostByTypeRelate($type,$slug){
    return Posts::where('type', '=', $type)->where('slug', '!=', $slug)->orderBy('pos', 'asc')->orderBy('created_at','desc')->limit(5)->get();
  }
  public function getListPostLimit($type,$limit){
    return Posts::where('type', '=', $type)->orderBy('pos', 'asc')->orderBy('created_at','desc')->limit($limit)->get();
  }
  public function getListPostLimitOffset($type,$limit,$offset){
    return Posts::where('type', '=', $type)->orderBy('pos', 'asc')->orderBy('created_at','desc')->offset($offset)->limit($limit)->get();
  }
  public function deletePost($id){
  	return Posts::where('id', '=', $id)->delete();
  }
  public function countPostByType($type){
    return Posts::where('type', '=', $type)->count();
  }
}
