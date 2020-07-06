<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Task;
use Illuminate\Http\Request;

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
 * Show Task Dashboard
 * */
Route::get('/',function (){
    $tasks = Task::orderBy('created_at','desc')->get();


   return view('tasks',[
       'tasks'=>$tasks
   ]);
});

/*
 * Add New Task
 * */
Route::post('/task',function (Request $request){
   //validate information
    $validator = Validator::make($request->all(),[
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});
/*
 * Delete Task
 * */
Route::delete('/task/{task}',function ($id){
    Task::findOrFail($id)->delete();
    /*Task::where('id','=',$id)->delete();*/
    return redirect('/');
});