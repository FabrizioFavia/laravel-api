<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $project = Project::with("technologies", "type")->paginate(5);

        $response = [
            'success'=> true,
            'results'=> $project
        ];

        return response()->json($response);
    }

    public function show($id){
        $projects = Project::with("technologies", "type")->find($id);

        $response = [
            'success'=> true,
            'results'=> $projects
        ];

        return response()->json($response);
    }
}
