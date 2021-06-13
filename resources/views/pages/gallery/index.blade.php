@extends('app')

@section('content')
<!-- Begin Page Content -->
<div class="container">
    <div class="row justify-content-center">
       <div class="col-8 mt-4">
        <h4>rumah</h4>
        <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rumah</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->rumah->nama }}</td>
                            <td>
                                <img src="{{ url($item->image) }}" alt="" style="width: 150px" class="img-thumbnail">
                            </td>
                            <td>
                                <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                    Edit
                                </a>
                                <form action="{{ route('gallery.destroy', $item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
