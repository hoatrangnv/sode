@extends('frontend.layout')

@section('content')
<main class="my-md-0 mt-4">
    <div class="container px-0 pl-0">

        <div class="content mb-md-5 mt-md-5">
            <h1 class="title h1 pb-3 px-3 px-md-0" style="text-align: center;"> Danh Sách TOP 10 Nhà Cái Cá Cược Uy
                Tín Nhất tại Việt Nam</h1>
            <div class="content-home px-3 px-md-0 d-none d-md-block mb-3">
                <div class="row">
                    <div class="col-md-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus tellus at diam tincidunt, a
                        luctus purus euismod. Sed ultrices metus sed tellus iaculis fringilla. Proin blandit tincidunt
                        posuere. Duis a erat nec ante mattis bibendum sed sit amet ligula. In hac habitasse platea
                        dictumst. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus tellus at diam
                        tincidunt, a luctus purus euismod. Sed ultrices metus sed tellus iaculis fringilla. Proin
                        blandit tincidunt posuere. Duis a erat nec ante mattis bibendum sed sit amet ligula. In hac
                        habitasse platea dictumst.
                    </div>
                    <div class="col-md-6">
                        <img src="/public/img/hinh/hinh3.png" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="caption container d-block d-md-none mb-3">
                <div class="truncate-text" style="display: block;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus tellus at diam tincidunt, a
                    luctus purus euismod. Sed ultrices metus sed tellus iaculis fringilla. Proin blandit tincidunt
                    posuere. Duis a erat nec ante mattis bibendum sed sit amet ligula. In hac habitasse platea dictumst.
                </div>
                <div class="truncate-text" style="display: none;">
                    <div class="pb-3 detail-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras cursus tellus at diam tincidunt, a
                        luctus purus euismod. Sed ultrices metus sed tellus iaculis fringilla. Proin blandit tincidunt
                        posuere. Duis a erat nec ante mattis bibendum sed sit amet ligula. In hac habitasse platea
                        dictumst.
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 col-img pb-3">
                            <div class="row">
                                <div class="col-md-2 col-2 pr-0 text-center"><img class="img img-fluid img-tik"
                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/tickV.png" /></div>
                                <div class="col-md-10 col-10 pl-lg-0">

                                    Tính minh bạch của nhà cái

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-img pb-3">
                            <div class="row">
                                <div class="col-md-2 col-2 pr-0 text-center"><img class="img img-fluid img-tik"
                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/tickV.png" /></div>
                                <div class="col-md-10 col-10 pl-lg-0">

                                    Chất lượng và trải nghiệm người dùng

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-img pb-3">
                            <div class="row">
                                <div class="col-md-2 col-2 pr-0 text-center"><img class="img img-fluid img-tik"
                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/tickV.png" /></div>
                                <div class="col-md-10 col-10 pl-lg-0">

                                    Các kèo cá cược có đa dạng, chuẩn xác hay không ?

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 col-img pb-3">
                            <div class="row">
                                <div class="col-md-2 col-2 pr-0 text-center"><img class="img img-fluid img-tik"
                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/tickV.png" /></div>
                                <div class="col-md-10 col-10 pl-lg-0">

                                    Tính bảo mật thông tin cao, quá trình rút nạp tiền đơn giản

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="moreless less" style="color: #006eb4; font-weight: 600;">Rút gọn</a>

                </div>
            </div>
            <div class="table-content ">
                <div class="col-12">
                    <div class="row border-left-0 border" style="background: #fff; box-shadow: 0 0 10px #ccc;">
                    </div>
                </div>
                <table class="table table-bordered table-nc">
                    <thead>
                        <tr class="tr-thead text-uppercase">
                            <th style="width: 263px;" scope="col" width="25%">Nhà cái</th>
                            <th style="width: 208px;" scope="col" width="22.5%">Khuyến mãi</th>
                            <th style="width: 250px;" scope="col" width="22.5%">Nhận xét</th>
                            <th style="width: 148px;" scope="col" width="15%">bình chọn</th>
                            <th style="width: 135px;" scope="col" width="15%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($top10banker as $key => $item)
                        <tr>
                            <td class="px-md-0 border-right-0 border-left-0" style="width: 263px;">
                                <div class="col-12">
                                    <div class="row border-left-0 border"
                                        style="box-shadow: 0 0 10px #ccc; background: #fff;">
                                        <div class="col-md-3 px-md-0">
                                            <div class="position-relative">
                                                <div class="stt">#{{$key + 1}}</div>
                                                @if ( $key == 0 )
                                                <div class="position-absolute" style="top: -10px; left: -10px;"><img
                                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/king-1.png" />
                                                </div>
                                                @elseif ( $key == 1)
                                                <div class="position-absolute" style="top: -10px; left: -10px;"><img
                                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/king-2.png">
                                                </div>
                                                @elseif ( $key == 2)
                                                <div class="position-absolute" style="top: -10px; left: -10px;"><img
                                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/king-3.png">
                                                </div>
                                                @endif
                                            </div>
                                            <div class="diem">{{number_format($item->rate, 1)}}</div>
                                        </div>
                                        <div class="col-md-9 my-auto"><a href="{{$item->register_url}}" target="_blank"
                                                rel="nofollow noopener"><img class="img img-fluid w-50 bg-dark"
                                                    src="{{'public/img/post/' .$item->logo}}" /></a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="border-left-0 border-top-0 " style="text-align: center; width: 208px;">
                                <div style="padding-top: 30px;">{!!$item->promotion!!}</div>
                            </td>
                            <td class="border-top-0" style="width: 250px;">
                                <div style="padding-top: 30px;">{!!$item->comment!!}</div>
                            </td>
                            <td class="border-right-0 border-top-0" style="width: 148px;">
                                <div style="padding-top: 20px;"><img
                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/star.png" width="75%" />
                                </div>
                                <div class="rank" style="color: #6f7072;">Lượt đánh giá</div>
                                <div class="h5 font-weight-bold" style="color: #6f7072;">{{$item->rate_times}}</div>
                            </td>
                            <td class="px-md-0 border-left-0 border-right-0" style="width: 135px;"><a
                                    class="btn btn-reg border rounded mb-2 float-right" href="{{$item->register_url}}"
                                    target="_blank" rel="nofollow noopener">Đăng ký</a>
                                <a class="btn btn_rate border rounded float-right" href="{{$item->rate_url}}">Đánh
                                    giá</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- mobile -->
                <table class="table d-block d-md-none">
                    <thead>
                        <tr class="tr-thead text-uppercase">
                            <th scope="col" width="50%">Nhà cái</th>
                            <th scope="col" width="50%">bình chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($top10banker as $key => $item)
                        <tr>
                            <td class="px-md-0 pr-0 border-right-0">
                                <div class="col-12">
                                    <div class="row border-left-0 border bg-white" style="box-shadow: 0 0 10px #ccc;">
                                        <div class="col-md-3 col-3 px-0">
                                            <div class="position-relative">
                                                <div class="stt">#{{$key + 1}}</div>
                                                @if ( $key == 0 )
                                                <div class="position-absolute" style="top: -10px; left: -10px;"><img
                                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/king-1.png" />
                                                </div>
                                                @elseif ( $key == 1)
                                                <div class="position-absolute" style="top: -10px; left: -10px;"><img
                                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/king-2.png">
                                                </div>
                                                @elseif ( $key == 2)
                                                <div class="position-absolute" style="top: -10px; left: -10px;"><img
                                                        src=" https://nhacaiso.vn/wp-content/uploads/2019/02/king-3.png">
                                                </div>
                                                @endif
                                            </div>
                                            <div class="diem">{{number_format($item->rate, 1)}}</div>
                                        </div>
                                        <div class="col-md-9 col-9 my-auto"><a href="{{$item->register_url}}"
                                                target="_blank" rel="nofollow noopener"><img
                                                    class="img img-fluid w-75 bg-dark"
                                                    src="{{'public/img/post/' .$item->logo}}" /></a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md-0 border-left-0"><a class="btn btn-reg border rounded mb-2 float-right"
                                    href="{{$item->register_url}}" target="_blank" rel="nofollow noopener">Đăng ký</a>
                                <a class="btn btn_rate border rounded float-right" href="{{$item->rate_url}}">Đánh
                                    giá</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!--game bài đổi thưởng bản mobile -->
        <div class="news d-block d-md-none mb-3 px-3">
            @foreach($list as $cate)
            @if(count($cate[2]) > 0)
            <div class="col-12 mb-3 mb-lg-0">
                <div class="title">
                    <h2 class=""><a class=" text-uppercase"
                            href="{{route('getCate', ['cate' => $cate[0]])}}">{{$cate[1]}}</a>
                    </h2>
                </div>
                <div class="content-news">
                    <div class="">
                        <a title="{{$cate[2][0]->title}}" href="{{route('getPost', ['slug' => $cate[2][0]->slug])}}">
                            <img class="img img-fluid mt-3" src="{{'public/img/post/' .$cate[2][0]->cover}}"
                                alt="{{$cate[2][0]->title}}"></a>
                        <div class="h3 title-news my-3"><a title="{{$cate[2][0]->title}}"
                                href="{{route('getPost', ['slug' => $cate[2][0]->slug])}}">{{$cate[2][0]->title}}</a>
                        </div>
                        <div class="des">
                            <p>{{$cate[2][0]->description}}</p>
                        </div>
                    </div>
                </div>
                <!--lit new -->
                @if(count($cate[2]) > 1)
                @for ($i = 1; $i < max(count($cate[2]),3); $i++) <!-- MOBILE -->
                    <div class="list-news d-block d-md-none">
                        <div class="row">
                            <div class="col-5">
                                <a title="{{$cate[2][$i]->title}}"
                                    href="{{route('getPost', ['slug' => $cate[2][$i]->slug])}}"> <img
                                        class="img img-fluid" src="{{'public/img/post/' .$cate[2][$i]->cover}}"
                                        alt="{{$cate[2][$i]->title}}"></a>
                            </div>
                            <div class="col-7 pl-0">
                                <h3><a
                                        href="{{route('getPost', ['slug' => $cate[2][$i]->slug])}}">{{$cate[2][$i]->title}}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endfor
                    @endif
            </div>
            @endif
            @endforeach
        </div>
        <!-- end -->

        <!--game bài đổi thưởng bản des -->
        <div class="news-footbal d-none d-md-block mt-5 pb-5">
            <div class="row">
                <div class="col-md-8">
                    @foreach($list as $cate)
                    @if(count($cate[2]) > 0)
                    <div class="ft-news">
                        <div class="title mb-3">
                            <h2 class=""><a class=" text-uppercase"
                                    href="{{route('getCate', ['cate' => $cate[0]])}}">{{$cate[1]}}</a></h2>
                        </div>
                        <div class="first-news">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <a class="text-dark" href="{{route('getPost', ['slug' => $cate[2][0]->slug])}}"
                                        title="{{$cate[2][0]->title}}">
                                        <img class="img img-fluid" src="{{'public/img/post/' .$cate[2][0]->cover}}"
                                            alt="{{$cate[2][0]->title}}">
                                    </a>
                                </div>
                                <div class="col-md-6 pl-0">
                                    <a class="text-dark" href="{{route('getPost', ['slug' => $cate[2][0]->slug])}}"
                                        title="{{$cate[2][0]->title}}">
                                        <h3 class="font-weight-bold">{{$cate[2][0]->title}}</h3>
                                    </a>
                                    <p class="m-0">
                                        <p>{{$cate[2][0]->description}}</p>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="hot-news py-3">
                            @if(count($cate[2]) > 1)

                            <div class="row">
                                @for ($i = 1; $i < max(count($cate[2]),3); $i++) <div class="col-md-4 pr-0">
                                    <a class="text-dark" href="{{route('getPost', ['slug' => $cate[2][$i]->slug])}}"
                                        title="{{$cate[2][$i]->title}}">
                                        <img class="img img-fluid" src="{{'public/img/post/' .$cate[2][$i]->cover}}"
                                            alt="{{$cate[2][$i]->title}}">
                                        <h4 class="mt-2 font-weight-bold">{{$cate[2][$i]->title}}</h4>
                                    </a>
                            </div>
                            @endfor
                        </div>

                        @endif
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-md-4 sidebar">
                <div class="box-sidebar">
                    <div class="title-sidebar -3">
                        <h2 class=""><a class=" text-uppercase"
                                href="{{route('getCate', ['cate' => config('config.cate')[0]])}}">Tin tức mỗi ngày</a>
                        </h2>
                    </div>
                    <div class="box-top-km  pt-3">
                        @foreach($news as $item)
                        <div class="row mb-3">
                            <div class="col-md-5 col-5">
                                <a href="{{route('getPost', ['slug' => $item->slug])}}"> <img class="img img-fluid"
                                        src="{{'public/img/post/' .$item->cover}}" alt="{{$item->title}}"></a>
                            </div>
                            <div class="col-md-7 col-7 pl-0">
                                <a href="{{route('getPost', ['slug' => $item->slug])}}">{{$item->title}}</a>
                            </div>
                        </div>
                        <div class="border-bottom mb-3"></div>
                        @endforeach
                    </div>
                </div>
                <div class="box-sidebar">
					<img src="/public/img/hinh/hinh1.jpg" class="img-fluid"/>
				</div>
				<div class="box-sidebar">
					<img src="/public/img/hinh/hinh2.jpg" class="img-fluid"/>
				</div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection