@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-8 mt-4">
        <h4>Category</h4>

        <table class="table">
            <a href="{{ route('category.create') }}" class="btn btn-sm btn-primary">tambah</a>
           <thead class="thead-dark">
               <tr>
               <th scope="col">#</th>
               <th scope="col">Nama Category</th>
               <th scope="col">Aksi</th>
               </tr>
           </thead>
           <tbody>
           @foreach ($items as $item )
           <tr>
               <th scope="col">{{$loop->iteration}}</th>
               <td scope="col">{{$item->nama}}</td>
               <td>
                <a href="{{ route('category.edit', $item->id) }}" class="btn btn-info">
                    Edit
                </a>
                   <form action="{{ route('category.destroy', $item->id) }}" method="post" class="d-inline">
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