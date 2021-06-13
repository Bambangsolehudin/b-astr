@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-8 mt-4">
        <h4> Tambah Rumah</h4>

        <form action="{{ route('rumah.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputnama1">Nama Rumah</label>
              <input type="nama" name="nama" class="form-control" id="exampleInputnama1">
            </div>
            <div class="form-group">
              <label for="exampleInputnama1">Alamat</label>
              <input type="nama" name="alamat" class="form-control" id="exampleInputnama1">
            </div>
            <div class="form-group">
              <label for="exampleInputnama1">Keterangan</label>
              <input type="nama" name="keterangan" class="form-control" id="exampleInputnama1">
            </div>

            <div class="form-group">
              <label for="title">Category</label>
              <select name="category_id" required class="form-control">
                  <option value="">Pilih Category</option>
                  @foreach($category as $c)
                      <option value="{{ $c->id }}">
                          {{ $c->nama }}
                      </option>
                  @endforeach
              </select>
          </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


       </div>
    </div>


   </div>
@endsection