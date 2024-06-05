<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('projects', function(){
    return response()->json([
        'success' => true, 
        'results' => Project::with(['type', 'technologies'])->orderByDesc('id')->paginate() // model Project con i metodi type(one to many) e technologies(many to many), con cui ha una relazione 
        ]);
    } );

Route::get('projects/{project}', function($id){
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
});
