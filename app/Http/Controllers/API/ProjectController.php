<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
   public function index(){
        return response()->json([
            'success' => true, 
            'results' => Project::with(['type', 'technologies'])->orderByDesc('id')->paginate() // model Project con i metodi type(one to many) e technologies(many to many), con cui ha una relazione 
            ]);
        } 

    public function show($id){
            $project = Project::with(['type', 'technologies'])->where('id', $id)->first();
         
            if ($project) { // se esiste quell project 
             return response()->json([ 
                 'success' => true,
                 'results' => $project
             ]);
            } else {
             return response()->json([
                 'success' => false,
                 'results' => 'Project non trovato' //altrimente se non esiste mostrare questo messagio
             ]);
            }
         }
}
