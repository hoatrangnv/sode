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
  	return Bankers::orderBy('rate', 'desc')->orderBy('created_at','desc')->get();
  }
  public function deleteBanker($id){
  	return Bankers::where('id', '=', $id)->delete();
  }
  public function top10(){
    return Bankers::orderBy('rate', 'desc')->orderBy('created_at','desc')->limit(10)->get();
  }
}
