@extends('frontend.layout')

@section('content')
<main class="my-md-0 mt-4">
    <section class="category my-lg-5 mb-3 mt-4">
        <div class="container pl-lg-0">
            <div class="cat">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="title-cat mb-3 text-uppercase">
                            <h1>Kinh nghiệm cá cược</h1>
                        </div>
                        <div class="list-news" id="list-news">
                            @foreach($listpost as $item)
                            <div class="row mb-3">
                                <div class="col-md-5 col-5">
                                    <a title="{{$item->title}}" href="{{route('getPost', ['slug' => $item->slug])}}">
                                        <img class="img img-fluid" src="{{'public/img/post/' .$item->cover}}"
                                            alt="{{$item->title}}"></a>
                                </div>
                                <div class="col-md-7 col-7 pl-0">
                                    <h3><a title="{{$item->title}}"
                                            href="{{route('getPost', ['slug' => $item->slug])}}">{{$item->title}}</a>
                                    </h3>
                                    <div class="des-cat d-none d-md-block">
                                        <p></p>
                                        <p>{{$item->description}}</p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @if($totalpost > count($listpost))
                        <button class="btn btn-loadmore">THÊM TIN TỨC</button>@endif
                        <input id="offset" type="hidden" value="{{count($listpost)}}">
                        <script type="text/javascript">
                        var checkajax = 1;
                        (function($) {
                            $('.btn-loadmore').on("click", function(e) {
                                e.preventDefault();
                                if (checkajax == 1) {

                                    checkajax = 0;
                                    var offset = $('#offset').val();
                                    $(this).html('ĐANG TẢI THÊM TIN TỨC ...');
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                                'content')
                                        }
                                    });
                                    $.ajax({
                                        url: '{{route("getMorePost", ["cate" => $cate])}}',
                                        type: 'POST',
                                        context: this,
                                        data: {
                                            offset: offset
                                        }
                                    }).done(function(data) {
                                        console.log(data);
                                        checkajax = 1;
                                        if (!data) {
                                            $(this).remove();
                                        } else {
                                            $('#list-news').append(data);
                                            $('#offset').val(parseInt(offset) + 10);
                                            $(this).html('THÊM TIN KHÁC');
                                        }
                                    })
                                }
                            });
                        })(jQuery);
                        </script>
                    </div>
                    @include('frontend.sidebar')
                </div>
            </div>
        </div>
    </section>
</main>
@endsection