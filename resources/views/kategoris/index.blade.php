@extends('layouts.layout')
@section('title' , 'kategori')
@section('content')

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kategoris.create') }}"> Create </a>
            </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kategoris as $kategori)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kategori->kategori }}</td>
            <td>
                <form action="{{ route('kategoris.destroy',$kategori->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('kategoris.show',$kategori->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('kategoris.edit',$kategori->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kategoris->links() !!}
      
@endsection