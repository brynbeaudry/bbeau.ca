<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Technology;
use App\ProjectImage;
use League\Flysystem\Exception;


class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();
        //dd($projects);
        /*
        $projects = $projects->map(function ($item, $key){
              //dd($item, $key, $images);
              $primary_image = $item->images()->where('primary', 1)->firstOrFail();
              //dd($primary_image);
              $project = collect($item);
              $project->push('img',$primary_image);
              dd($item);
              return $item->push('img',$primary_image);
        });
        */
        foreach ($projects as $project) {
          $project['img'] = $project->images()->where('primary', 1)->first()->img;
        }

        $technologies = Technology::all();
        $technologies = $technologies->shuffle();

        //dd($projects);

        return view('welcome', ['projects' => $projects, 'technologies' => $technologies]);
    }

}
