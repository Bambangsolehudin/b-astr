@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-8 mt-4">
        <h4> Tambah Category</h4>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputnama1">Nama Category</label>
              <input type="nama" name="nama" class="form-control" id="exampleInputnama1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


       </div>
    </div>


   </div>
@endsection