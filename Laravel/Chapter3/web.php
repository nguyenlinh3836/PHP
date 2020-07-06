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
use App\Post;


Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showDetails');

Route::get('profile/{name}','ProfileController@showProfile');

Route::get('/', function () {
        return view('welcome');
});

/*Route::get('about',function (){
    return 'About Content';
});*/

/*Route::get('about/directions',function (){
    return 'Directions go here';
});*/
Route::get('about/directions',array('as' => 'directions', function(){
    $theURL = URL::route('directions');
    return "Directions go to this URL: $theURL";
}));


Route::any('submit-form',function (){
    return 'Process Form';
});
Route::get('about/{theSubject}','AboutController@showSubject');
/*Route::get('about/{theSubject}',function ($theSubject){
    return $theSubject. ' content goes here';
});*/

Route::get('about/classes/{theSubject}',function ($theSubject){
    return " Content on $theSubject";
});

Route::get('about/classes/{theArt}/{thePrice}',function ($theArt, $thePrice){
    return "The product: $theArt and $thePrice";
});

Route::get('where',function (){
    return Redirect::to('about/directions');
});

Route::get('/insert',function (){
   DB::insert('insert into posts(title,body,is_admin) values (?,?,?)',['PHP with Laravel','Laravel is the best fremework !',0]);
   return 'DONE';
});

Route::get('/read',function (){
   $result = DB::select('select * from posts where id = ?',[1]);
  /* return $result;*/
    foreach ($result as $post){
        return $post->body;
    }
});

Route::get('update',function (){
   $updated = DB::update('update posts set title = "New Title hihi" where id > ?',[1]);
   return $updated;
});

Route::get('delete',function (){
   $delete = DB::delete('delete from posts where id = ?',[4]);
   return $delete;
});

Route::get('readAll',function (){
   $posts = Post::all();
   foreach ($posts as $p){
       /*return $p->title;*/
       echo $p->title . " <br> " . $p->body ;
       echo "<br>";
   }
});

Route::get('findId',function (){
   $posts = Post::where('id','>=',1)
       ->where('title','PHP with Laravel')
       ->where('body','like','%new%')
       ->orderBy('id','desc')
       ->take(10)
       ->get();
    foreach ($posts as $p){
        /*return $p->title;*/
        echo $p->title . " <br> " . $p->body ;
        echo "<br>";
    }
});

Route::get('insertORM',function (){
    $p = new Post;
    $p->title = 'inserted ORM';
    $p->body = 'INSERTED done done ORM';
    $p->is_admin = 1;
    $p->save();
});

Route::get('updateORM',function (){
    /*$p = Post::find(2);*/
    $p = Post::where('id',5)->first();
    $p->title = 'updated ORM';
    $p->body = 'updated Ahihi DONE DONE';
    $p->save();
});

Route::get('deleteORM',function (){
    Post::where('id','>=',14)
    ->delete();
});

Route::get('destroyORM',function (){
   Post::destroy([7,11]);
});