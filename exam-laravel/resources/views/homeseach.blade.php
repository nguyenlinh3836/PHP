<?php
?>
@extends('layouts.app')

@section('content')
    <h1>Practive</h1>
    <div class="panel-body">
        <form action="{{url('search')}}" method="get" class="form-horizontal">
            {{csrf_field()}}

            {{--ten task--}}
            <div class="form_group">
                <label for="seach" class="col-sm-3 control-label">Search</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            {{--nut task--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Search task
                    </button>
                </div>
                <div class="panel panel-default">
                    @foreach($products as $product)
                                <div>{{$product->id}}</div>
                                <div>{{$product->title}}</div>
                                <div>{{$product->price}}</div>
                                <div><img src="{{url(asset($post->images))}}"></div>
                                <div>
                                    <form action="delete/{{$post->id}}" method="get">
                                        <button>Delete</button>
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
@endsection

