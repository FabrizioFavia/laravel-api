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
        $projects = Project::with("technologies", "type")->paginate(4);

        $response = [
            'success'=> true,
            'results'=> $projects
        ];

        return response()->json($response);
    }
}
