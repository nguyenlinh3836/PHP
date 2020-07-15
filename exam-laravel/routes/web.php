<?php
use Illuminate\Support\Facades\Route;
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
use \App\products;
use Illuminate\http\Request;

Route::get('/', function () {
    $products = products::orderBy('id','asc')->get();
    return view('home',compact('products'));
});

Route::post('/products',function (Request $request){
    //Validate Information
    $validator = Validator::make($request->all(),[
        'name' =>'required|max:255'
    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $products = new \App\products();
    $products->title = $request->title;
    $products->price = $request->price;
    $products->images = $request->images;
    $products->save();
    return redirect('/');

});

/**
 *
 */
Route::get('/delete/{delete}',function ($id){
    products::findOrFail($id)->delete();
    /*Task::where('id','=',$id)->delete();*/
    return redirect('/');
});

Route::post('/search',function (Request $request){
//    Validate Information
    $validator = Validator::make($request->all(),[
        'name' =>'required|max:255',
    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $products= products::where('title' , 'like', $request->name, 'or','id', $request->name)->get();
    return view('home', compact('products'));

});

Route::get('add',function (Request $request){
    //Validate Information
    $validator = Validator::make($request->all(),[
        'title' =>'required|max:255',

    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $productud = new products;
    $productud->title = $request->title;
    $productud->price = $request->price;
    $productud->images = $request->images;
    $productud->save();
    return 'done';
});

Route::get('update/{id}',function (Request $request, $id){
    //Validate Information
    $validator = Validator::make($request->all(),[
        'title' =>'required|max:255',

    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $productud = new products($id);
    $productud->title = $request->title;
    $productud->price = $request->price;
    $productud->images = $request->images;
    $productud->save();
    return 'Update success';
});
