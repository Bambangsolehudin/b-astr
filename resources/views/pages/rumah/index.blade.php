@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-8 mt-4">
        <h4>rumah</h4>

        <table class="table">
            <a href="{{ route('rumah.create') }}" class="btn btn-sm btn-primary">tambah</a>
           <thead class="thead-dark">
               <tr>
               <th scope="col">#</th>
               <th scope="col">Alamat</th>
               <th scope="col">Category</th>
               <th scope="col">Keterangan</th>
               <th scope="col">Aksi</th>
               </tr>
           </thead>
           <tbody>
           @foreach ($items as $item )
           <tr>
               <th scope="col">{{$loop->iteration}}</th>
               <td scope="col">{{$item->alamat}}</td>
               <td scope="col">{{$item->category->nama}}</td>
               <td scope="col">{{$item->keterangan}}</td>
               <td>
                <a href="{{ route('rumah.edit', $item->id) }}" class="btn btn-info">
                    Edit
                </a>
                   <form action="{{ route('rumah.destroy', $item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" >
                       delete
                    </button>
                </form>
               </td>
               </tr> 
           @endforeach
  
           </tbody>
       </table>


       </div>
    </div>


   </div>
@endsection