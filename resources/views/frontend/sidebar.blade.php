<div class="col-md-4 col-12 sidebar">
  <div class="box-sidebar pt-3 pt-lg-0">
      <div class="title-sidebar text-uppercase">
          Top 10 nhà cái tốt nhất
      </div>
      <div class="box-top pt-3">
        @foreach($top10banker as $key => $item)
          <div class="row mx-3">
              <div class="col-md-6 col-6 pl-0 text-center">
                  <img class="img img-fluid w-50 bg-dark"
                      src="{{'/img/post/' .$item->logo}}">
              </div>
              <div class="col-md-4 col-4 pl-0 pr-0 text-center">
                  <p class="evaluate"><a href="{{$item->rate_url}}">ĐÁNH GIÁ</a></p>
              </div>
              <div class="col-md-2 col-2 px-0 text-center">
                  <p class="mark-col">{{number_format($item->rate, 1)}}</p>
              </div>
          </div>
          <div class="border-bottom border-sidebar mb-3 mx-lg-3"></div>
        @endforeach
      </div>
  </div>
  <!---->
  <div class="border-top mt-3 d-block d-md-none"
      style="margin-left: -15px;margin-right: -15px;"></div>
  <div class="box-sidebar">
      <div class="title-sidebar pt-3">
          KHUYẾN MÃI MỚI NHẤT
      </div>
      <div class="box-top-km  pt-3">
        @foreach($promotion as $key => $item)
          <div class="row mb-3">
              <div class="col-md-5 col-5">
                  <a
                      href="{{route('getPost', ['slug' => $item->slug])}}">
                      <img class="img img-fluid"
                          src="{{'/img/post/' .$item->cover}}"
                          alt="{{$item->title}}"></a>
              </div>
              <div class="col-md-7 col-7 pl-0">
                  <a
                      href="{{route('getPost', ['slug' => $item->slug])}}">
                      {{$item->title}}</a>
              </div>
          </div>
          <div class="border-bottom mb-3"></div>
        @endforeach
      </div>
  </div>
</div>