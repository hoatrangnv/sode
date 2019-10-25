<div class="main-menu">
  <h5 class="sidenav-heading">Main</h5>
  <ul id="side-main-menu" class="side-menu list-unstyled">                  
    <li class="@yield('home_active')"><a href="{{route('adgetHome')}}"><i class="icon-home"></i>Home</a></li>
    <li class="@yield('add_post_active')"><a href="{{ route('adgetAddPost') }}"><i class="icon-form"></i>Thêm bài mới</a></li>
    <li class="@yield('list_post_active')"><a href="{{ route('adgetListPost') }}"><i class="icon icon-list"></i>Danh sách bài viết</a></li>
    <li class="@yield('add_banker_active')"><a href="{{ route('adgetAddBanker') }}"><i class="icon-form"></i>Thêm nhà cái mới</a></li>
    <li class="@yield('list_banker_active')"><a href="{{ route('adgetListBanker') }}"><i class="icon icon-list"></i>Danh sách nhà cái</a></li>
    <li class="@yield('list_user_active')"><a href="{{ route('adgetListUser') }}"><i class="icon icon-user"></i>Danh sách người dùng</a></li>
  </ul>
</div>