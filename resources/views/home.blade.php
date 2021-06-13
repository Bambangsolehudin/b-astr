@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-4 mt-4 text-center">
        <a href="{{ route('category.index') }}" class="btn btn-primary">Category</a>
       
       </div>
       <div class="col-4 mt-4 text-center">
        <a href="{{ route('rumah.index') }}" class="btn btn-primary">Rumah</a>
       
       </div>
       <div class="col-4 mt-4 text-center">
        <a href="{{ route('gallery.index') }}" class="btn btn-primary">Gallery</a>
       
       </div>

     
    </div>


   </div>

@endsection
