<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Config;
use App\Posts;
use App\Bankers;
use App\User;

class AdminController extends Controller
{
    
  /**
  * Get login page
  */
  public function getLogin() {
  	if (Auth::check()) {
  		if (Auth::user()->admin == 1){
  			return redirect()->route('adgetHome');
  		}else{
  			return redirect()->route('getHome');
  		}
    }else{
    	return view('admin.login', $this->data);
    }
  }

  /**
  * Post login page
  */
  public function postLogin(Request $request) {
    if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
      // Authentication passed...
      if (Auth::user()->admin == 1){
        return redirect()->route('adgetHome');
      }else{
        return redirect()->route('getHome');
      }
    }else{
      return redirect()->route('adgetLogin')->with('error', 'Mật khẩu hoặc tài khoản không đúng');
    }
  }

  /**
  * Get home page
  */
  public function getHome() {

    return view('admin.home', $this->data);
  }

  /**
  * Update config by ajax
  */
  public function updateConfig(Request $request) {
    $title = $request->input('title');
    $description = $request->input('description');

    if ($title && $description){
      $configModel = new Config();

      $result = $configModel->updateConfig(['title' => $title, 'description' => $description]);
      return $result;
    }
    return 0;
  }

  /**
  * Get add post page
  */
  public function getAddPost() {

    return view('admin.post_add', $this->data);
  }

  /**
  * Post add post page
  */
  public function postAddPost(Request $request) {

    // title
    $title = $request->input('title');
    if (!$title) {
      $title = "Post " . time();
    }
    // slug
    $slug = $request->input('slug');
    if (!$slug) {
      $slug = str_slug($title, '-');
    }else{
      $slug = str_slug($slug, '-');
    }
    // type
    $type = $request->input('type');
    if (!$type) {
      $type = 1;
    }
    // coverFile
    $coverFile = $request->file('cover');
    $cover = "";
    if ($request->hasFile('cover')) {
      $cover = $slug . '.' . $request->cover->extension();
      $request->cover->storeAs('img/post/', $cover);
      $cover .= '?n='.time();
    }
    // pos
    $pos = $request->input('pos');
    if (!$pos) {
      $pos = 999;
    }
    // view
    $view = $request->input('view');
    if (!$view) {
      $view = 1;
    }
    // description
    $description = $request->input('description');
    if (!$description) {
      $description = "";
    }
    // content
    $content = $request->input('content');
    if (!$content) {
      $content = "";
    }

    $dataInsert = [
      'title' => $title,
      'slug' => $slug,
      'type' => $type,
      'cover' => $cover,
      'pos' => $pos,
      'view' => $view,
      'description' => $description,
      'content' => $content,
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
    ];

    $postsModel = new Posts();
    $result = $postsModel->insertPost($dataInsert);
    if ($result > 0) {
      return redirect()->route('adgetListPost')->with('success', 'Thêm thành công!');
    }else{
      return redirect()->route('adgetListPost')->with('error', 'Thêm thất bại!');
    }

  }

  /**
  * Get edit post page
  */
  public function getEditPost($id) {

    $postsModel = new Posts();
    $post = $postsModel->getPostById($id);

    if ($post) {
      $this->data['post'] = $post;
      return view('admin.post_edit', $this->data);
    }else{
      return redirect()->route('adgetListPost');
    }

    
  }

  /**
  * Post edit post page
  */
  public function postEditPost($id, Request $request) {

    // title
    $title = $request->input('title');
    if (!$title) {
      $title = "Post " . time();
    }
    // slug
    $slug = $request->input('slug');
    if (!$slug) {
      $slug = str_slug($title, '-');
    }else{
      $slug = str_slug($slug, '-');
    }
    // type
    $type = $request->input('type');
    if (!$type) {
      $type = 1;
    }
    // coverFile
    $coverFile = $request->file('cover');
    $cover = "";
    if ($request->hasFile('cover')) {
      $cover = $slug . '.' . $request->cover->extension();
      $request->cover->storeAs('img/post/', $cover);
      $cover .= '?n='.time();
    }
    // pos
    $pos = $request->input('pos');
    if (!$pos) {
      $pos = 999;
    }
    // view
    $view = $request->input('view');
    if (!$view) {
      $view = 1;
    }
    // description
    $description = $request->input('description');
    if (!$description) {
      $description = "";
    }
    // content
    $content = $request->input('content');
    if (!$content) {
      $content = "";
    }

    $dataUpdate = [
      'title' => $title,
      'slug' => $slug,
      'type' => $type,
      'pos' => $pos,
      'view' => $view,
      'description' => $description,
      'content' => $content,
      'updated_at' => date('Y-m-d H:i:s')
    ];

    if ( $cover != "" ){
      $dataUpdate['cover'] = $cover;
    }

    $postsModel = new Posts();
    $result = $postsModel->updatePost($id, $dataUpdate);
    if ($result > 0) {
      return redirect()->route('adgetEditPost', ['id' => $id])->with('success', 'Cập nhật thành công!');
    }else{
      return redirect()->route('adgetEditPost', ['id' => $id])->with('error', 'Cập nhật thất bại!');
    }

  }

  /**
  * Get list post page
  */
  public function getListPost() {

    $postsModel = new Posts();
    $posts = $postsModel->getListPost();
    $this->data['posts'] = $posts;

    return view('admin.post_list', $this->data);
  }

  /**
  * Delete post
  */
  public function getDelPost($id) {

    $postsModel = new Posts();
    $result = $postsModel->deletePost($id);

    if ($result > 0) {
      return redirect()->route('adgetListPost')->with('success', 'Xóa thành công!');
    }else{
      return redirect()->route('adgetListPost')->with('error', 'Xóa thất bại!');
    }
  }

  /**
  * Get add banker page
  */
  public function getAddBanker() {

    return view('admin.banker_add', $this->data);
  }

  /**
  * Post add banker page
  */
  public function postAddBanker(Request $request) {

    // name
    $name = $request->input('name');
    if (!$name) {
      $name = "Banker " . time();
    }
    // logo
    $coverFile = $request->file('logo');
    $logo = "";
    if ($request->hasFile('logo')) {
      $logo = str_slug($name, '-') . '.' . $request->logo->extension();
      $request->logo->storeAs('img/post/', $logo);
      $logo .= '?n='.time();
    }
    // promotion
    $promotion = $request->input('promotion');
    if (!$promotion) {
      $promotion = "";
    }
    // comment
    $comment = $request->input('comment');
    if (!$comment) {
      $comment = "";
    }
    // rate
    $rate = $request->input('rate');
    if (!$rate) {
      $rate = 0;
    }
    // rate_times
    $rate_times = $request->input('rate_times');
    if (!$rate_times) {
      $rate_times = 0;
    }
    // register_url
    $register_url = $request->input('register_url');
    if (!$register_url) {
      $register_url = "";
    }
    // rate_url
    $rate_url = $request->input('rate_url');
    if (!$rate_url) {
      $rate_url = "";
    }

    $dataInsert = [
      'name' => $name,
      'logo' => $logo,
      'promotion' => $promotion,
      'comment' => $comment,
      'rate' => (float)$rate,
      'rate_times' => $rate_times,
      'register_url' => $register_url,
      'rate_url' => $rate_url,
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
    ];

    $bankersModel = new Bankers();
    $result = $bankersModel->insertBanker($dataInsert);
    if ($result > 0) {
      return redirect()->route('adgetListBanker')->with('success', 'Thêm thành công!');
    }else{
      return redirect()->route('adgetListBanker')->with('error', 'Thêm thất bại!');
    }

  }

  /**
  * Get edit banker page
  */
  public function getEditBanker($id) {

    $bankersModel = new Bankers();
    $post = $bankersModel->getBankerById($id);

    if ($post) {
      $this->data['post'] = $post;
      return view('admin.banker_edit', $this->data);
    }else{
      return redirect()->route('adgetListBanker');
    }

    
  }

  /**
  * Post edit banker page
  */
  public function postEditBanker($id, Request $request) {

    // name
    $name = $request->input('name');
    if (!$name) {
      $name = "Banker " . time();
    }
    // logo
    $coverFile = $request->file('logo');
    $logo = "";
    if ($request->hasFile('logo')) {
      $logo = str_slug($name, '-') . '.' . $request->logo->extension();
      $request->logo->storeAs('img/post/', $logo);
      $logo .= '?n='.time();
    }
    // promotion
    $promotion = $request->input('promotion');
    if (!$promotion) {
      $promotion = "";
    }
    // comment
    $comment = $request->input('comment');
    if (!$comment) {
      $comment = "";
    }
    // rate
    $rate = $request->input('rate');
    if (!$rate) {
      $rate = 0;
    }
    // rate_times
    $rate_times = $request->input('rate_times');
    if (!$rate_times) {
      $rate_times = 0;
    }
    // register_url
    $register_url = $request->input('register_url');
    if (!$register_url) {
      $register_url = "";
    }
    // rate_url
    $rate_url = $request->input('rate_url');
    if (!$rate_url) {
      $rate_url = "";
    }

    $dataUpdate = [
      'name' => $name,
      'promotion' => $promotion,
      'comment' => $comment,
      'rate' => (float)$rate,
      'rate_times' => $rate_times,
      'register_url' => $register_url,
      'rate_url' => $rate_url,
      'updated_at' => date('Y-m-d H:i:s')
    ];

    if ( $logo != "" ){
      $dataUpdate['logo'] = $logo;
    }

    $bankersModel = new Bankers();
    $result = $bankersModel->updateBanker($id, $dataUpdate);
    if ($result > 0) {
      return redirect()->route('adgetEditBanker', ['id' => $id])->with('success', 'Cập nhật thành công!');
    }else{
      return redirect()->route('adgetEditBanker', ['id' => $id])->with('error', 'Cập nhật thất bại!');
    }

  }

  /**
  * Get list banker page
  */
  public function getListBanker() {

    $bankersModel = new Bankers();
    $posts = $bankersModel->getListBanker();
    $this->data['posts'] = $posts;

    return view('admin.banker_list', $this->data);
  }

  /**
  * Delete banker
  */
  public function getDelBanker($id) {

    $bankersModel = new Bankers();
    $result = $bankersModel->deleteBanker($id);

    if ($result > 0) {
      return redirect()->route('adgetListBanker')->with('success', 'Xóa thành công!');
    }else{
      return redirect()->route('adgetListBanker')->with('error', 'Xóa thất bại!');
    }
  }

  /**
  * Add user
  */
  public function postAddUser(Request $request){

    $name = $request->input('name');
    if( !$name ){
      $name = "Người dùng " . time();
    }
    $email = $request->input('email');
    if( !$email ){
      return redirect()->route('adgetHome')->with('error', 'Chưa nhập Email');
    }
    $password = $request->input('password');
    if( !$password ){
      return redirect()->route('adgetHome')->with('error', 'Chưa nhập Password');
    }
    if( strlen($password) < 6 ){
      return redirect()->route('adgetHome')->with('error', 'Password ít nhất 6 kí tự');
    }
    $phone_number = $request->input('phone_number');
    if( !$phone_number ){
      $phone_number = "";
    }

    $userModal = new User();
    $userCheck = $userModal->getUserByEmail($email);

    if ($userCheck) {
      return redirect()->route('adgetHome')->with('error', 'Email đã tồn tại');
    }

    User::create([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password),
        'phone_number' => $phone_number,
        'level' => 1,
        'admin' => 1,
    ]);

    return redirect()->route('adgetListUser')->with('success', 'Thêm người dùng thành công');
  }

  /**
  * Get list user
  */
  public function getListUser() {

    $userModel = new User();
    $users = $userModel->getListUser();
    $this->data['users'] = $users;

    return view('admin.user_list', $this->data);
  }

  /**
  * Delete user
  */
  public function getDelUser($id) {

    $userModel = new User();
    $result = $userModel->deleteUser($id);

    if ($result > 0) {
      return redirect()->route('adgetListUser')->with('success', 'Xóa thành công!');
    }else{
      return redirect()->route('adgetListUser')->with('error', 'Xóa thất bại!');
    }
  }

  /**
  * update password
  */
  public function postUpdatePassword(Request $request) {

    $id = $request->input('id');
    $pw = $request->input('pw');
    if (strlen($pw) < 6){
      return 0;
    }

    $userModel = new User();
    $result = $userModel->updateUser($id, ['password' => bcrypt($pw)]);
    
    return $result;
  }
}
