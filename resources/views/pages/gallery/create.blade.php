@extends('app')

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <!-- Page Heading -->
    <div class=" justify-content-center">
        <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
        
    </div>
    <!-- Content Row -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label for="title">Rumah</label>
                        <select name="rumah_id" required class="form-control">
                            <option value="">Pilih Rumah</option>
                            @foreach($rumahs as $rumah)
                                <option value="{{ $rumah->id }}">
                                    {{ $rumah->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="Image" >
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
            </form>
        </div>
    </div>
</div>


</div>
        <!-- /.container-fluid -->
@endsection
