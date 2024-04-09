@extends('layouts.base')
@section('content')

<div class="col-md-12">
    <br>
    <h1>Libros</h1> <a href="{{ route('books.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Nuevo</a>
    <hr>

    <div class="row">
        @foreach($books as $book)
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header">
                    {{ $book->author }} | {{ $book->publication_year }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        <hr>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-primary"><i class="bi bi-list"></i></a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <form style="display: inline" action="{{ route('books.destroy', $book) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('¿Desea eliminar este libro?')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                    <div class="card-footer text-body-secondary">
                        $ {{ $book->price }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection