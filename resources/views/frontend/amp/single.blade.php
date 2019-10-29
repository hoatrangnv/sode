@extends('frontend.amp.layout')

@section('content')
<main>
    <section class="single my-lg-5 my-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pl-lg-0">
                    <div class="content">
                        <h1>{{$post->title}}</h1>
                        <div class="share d-block d-md-none pt-5 "
                            style="position: relative;top: -35px;text-align: right;">
                            <!-- Load Facebook SDK for JavaScript -->

                            <div id="fb-root" class=" fb_reset">
                                <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
                                    <div></div>
                                    <div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true"
                                            title="Facebook Cross Domain Communication Frame" tabindex="-1"
                                            frameborder="0" allowtransparency="true" allowfullscreen="true"
                                            scrolling="no" allow="encrypted-media"
                                            src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f1e59240a91dc0c&amp;origin=https%3A%2F%2Fnhacaiso.vn"
                                            style="border: none;"></iframe></div>
                                </div>
                            </div>
                        </div>
                        {!!$post->content!!}
                        <div class="post-views post-5979 entry-meta">
                            <span class="post-views-icon dashicons dashicons-chart-bar"></span>
                            <span class="post-views-label">Post Views: </span>
                            <span class="post-views-count">{{number_format($post->view)}}</span>
                        </div>
                        <div class="d-block d-sm-none my-2">
                            <a href="https://taimacao.club/?utm_source=nhacaiso.vn&amp;utm_medium=CPC&amp;utm_campaign=content_bottom_728x90"
                                target="_blank" rel="nofollow"><img
                                    src="https://nhacaiso.vn/wp-content/themes/nhacaiso/assets/img/taigamemacao.jpg"
                                    class="img-fluid"></a>
                        </div>
                        <div class="share d-none d-md-block py-3 border-bottom border-top"
                            style="margin-top: 80px; color: #565656;font-weight: 600;">
                            <!-- Load Facebook SDK for JavaScript -->

                            <div id="fb-root"></div>
                            <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                            </script>

                            <!-- Your share button code -->
                            Share Post: <div class="fb-like fb_iframe_widget"
                                data-href="https://nhacaiso.vn/cach-xem-keo-doc-keo-bong-da/" data-width="50px"
                                data-layout="button" data-action="like" data-size="large" data-show-faces="true"
                                data-share="true" fb-xfbml-state="rendered"
                                fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=745&amp;href=https%3A%2F%2Fnhacaiso.vn%2Fcach-xem-keo-doc-keo-bong-da%2F&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=large&amp;width=50px">
                                <span style="vertical-align: bottom; width: 122px; height: 28px;"><iframe
                                        name="f2ffc69031bc2c" height="1000px" title="fb:like Facebook Social Plugin"
                                        frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no"
                                        allow="encrypted-media"
                                        src="https://www.facebook.com/v3.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df101fe19129885%26domain%3Dnhacaiso.vn%26origin%3Dhttps%253A%252F%252Fnhacaiso.vn%252Ff1e59240a91dc0c%26relation%3Dparent.parent&amp;container_width=745&amp;href=https%3A%2F%2Fnhacaiso.vn%2Fcach-xem-keo-doc-keo-bong-da%2F&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=large&amp;width=50px"
                                        style="border: none; visibility: visible; width: 122px; height: 28px;"
                                        class=""></iframe></span></div>
                        </div>
                        <div class="news-diff pt-lg-5 pt-3 mt-lg-0">
                            <div class="title-news-diff h2 font-weight-bold text-uppercase">
                                Tin cùng chuyên mục
                            </div>
                            <div class="box-content mt-3">
                                <div class="row grid-news">
                                    @foreach($postRelated as $item)
                                    <div class="col-md-12 col-12 v-news-item text-dark mb-3 pt-3 px-0">
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <a href="{{route('getPost', ['slug' => $item->slug])}}">
                                                    <img class="img-fluid" src="{{'public/img/post/' .$item->cover}}"
                                                        alt="{{$item->title}}">
                                                </a>
                                            </div>
                                            <div class="col-md-7 col-7 pl-0 ">
                                                <div class="des">
                                                    <a class="h3" title="{{$item->title}}"
                                                        href="{{route('getPost', ['slug' => $item->slug])}}">{{$item->title}}</a>
                                                    <p class="tit text-justify "></p>
                                                    <p>{{$item->description}}</p>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- <button class="btn btn-loadmore" data-str_ex_ids="">THÊM TIN TỨC</button>
                            <input id="offset" type="hidden" value="14">
                            <script type="text/javascript">
                                var ex_ids ;
                                $('.btn-loadmore').on("click",function(e){
                                    e.preventDefault();

                                    var str = $(this).data('str_ex_ids');

                                    if ( !ex_ids ) ex_ids = str;



                                    var offset = $('#offset').val();
                                    console.log(offset)
                                    $(this).html('ĐANG TẢI THÊM TIN TỨC ...');
                                    $.ajax({
                                        url: '?cat=&action=get_post&str_ex_ids=' + ex_ids,
                                        type: 'GET',
                                        context: this,
                                    }).done(function(data){
                                        if(!data || data.html === ''){
                                            $(this).remove();
                                        }else{
                                            $('.box-content').append(data.html);
                                            ex_ids += data.exclude_post_id;

                                            $('#offset').val(parseInt(offset)+9);
                                            $(this).html('THÊM TIN KHÁC');
                                        }
                                    })
                                });

                            </script>-->
                        </div>
                    </div>
                </div>
                @include('frontend.sidebar')
            </div>
        </div>
    </section>
</main>
@endsection