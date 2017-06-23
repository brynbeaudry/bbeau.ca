<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clients;
use App\ProjectImage;
use App\ProjectTechnology;
use App\ProjectVideo;
use App\Technology;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
    //


    public $timestamps = false;


    /*get the images related to the project*/
    public function images()
    {
        return $this->hasMany('App\ProjectImage')->get();
    }

    /*get the videos related to the project*/
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    /*get the cline trelated to the project*/
    public function client()
    {
        return $this->hasOne('App\Client');
    }

    /*get the related technologies*/
    public function technologies(){
      return DB::table('technologies AS t')
        ->join('project_technology AS pt', 't.id', '=', 'pt.technology_id')
        ->where('pt.project_id', '=', $this->id)
        ->select('t.*')
        ->get()->toArray();
    }

}
