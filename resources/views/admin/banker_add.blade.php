@extends('admin.layout')

@section('add_banker_active', 'active')

@section('content')

<!-- Create Article Section -->
<section class="mt-30px mb-30px forms">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <!-- Recent Updates Widget          -->
        <div id="create-news" class="card updates">
          <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
            <h2 class="h2 bold"><a href="javascript:void(0)">Tạo nhà cái mới</a></h2>
          </div>
          <div id="create-box" class="show create-box card-body">
            <form action="{{route('adpostAddBanker')}}" method="POST" id="create-new" class="form-create" enctype='multipart/form-data'>
              {{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Tên nhà cái:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-name" name="name" required="">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Logo:</label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="form-avatar" name="logo">
                      <label class="custom-file-label" for="form-avatar">Choose file</label>
                    </div>
                  </div>
                   <img id="file-show"class="hidden">
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Khuyến mãi:</label>
                <div class="col-sm-10">
                  <textarea id="form-promotion-txt" class="text-content form-control" name="promotion" ></textarea>
                </div>
              </div>
              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-2 form-control-label">Nhận xét:</label>
                <div class="col-sm-10">
                  <textarea id="form-comment-txt" class="text-content form-control" name="comment" ></textarea>
                </div>
              </div>
              <div class="line"></div>
               <div class="form-group row">
                <label class="col-sm-2 form-control-label">Đánh giá:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="form-rate" name="rate">
                </div>
              </div>
              <div class="line"></div>
               <div class="form-group row">
                <label class="col-sm-2 form-control-label">Số lượt đánh giá:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="form-rate_times" name="rate_times">
                </div>
              </div>
              <div class="line"></div>
               <div class="form-group row">
                <label class="col-sm-2 form-control-label">Link đăng kí:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-register_url" name="register_url">
                </div>
              </div>
              <div class="line"></div>
               <div class="form-group row">
                <label class="col-sm-2 form-control-label">Link đánh giá:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="form-rate_url" name="rate_url">
                </div>
              </div>

              <div class="form-group bold">       
                <input type="reset" value="RESET" class="btn btn-secondary"> <input type="submit" value="TẠO MỚI" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
        <!-- Recent Updates Widget End-->
      </div>
    </div>
  </div>
</section>

@endsection

@section('js')
<script src="/admin/js/post.js" type="text/javascript" ></script>
@endsection