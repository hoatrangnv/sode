@if(config('config.amp') == 0)
<!doctype html>
<html lang="vi">

@include('frontend.head')

<body>
@include('frontend.header')
@yield('content')
@include('frontend.footer')    
</body>

</html>
@else
<!doctype html>
<html ⚡>
  @include('frontend.amp.head')
  <body>
    @include('frontend.amp.header')
		@yield('content')
		@include('frontend.amp.footer')  
  </body>
</html>
@endif