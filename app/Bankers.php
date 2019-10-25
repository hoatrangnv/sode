<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bankers extends Model
{
  protected $table = 'bankers';

  public function insertBanker($data){
  	return Bankers::insert($data);
  }

  public function updateBanker($id,$data){
  	return Bankers::where('id', '=', $id)->update($data);
  }

  public function getBankerById($id){
  	return Bankers::where('id', '=', $id)->first();
  }

  public function getListBanker(){
  	return Bankers::orderBy('rate', 'asc')->orderBy('created_at','desc')->get();
  }
  public function deleteBanker($id){
  	return Bankers::where('id', '=', $id)->delete();
  }
}
