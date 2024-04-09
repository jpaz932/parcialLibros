@extends('layouts.base')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4>Detalle del Libro: {{ $book->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Título:</strong> {{ $book->title }}</p>
                        <p><strong>Autor:</strong> {{ $book->author }}</p>
                        <p><strong>Descripción:</strong> {{ $book->description }}</p>
                        <p><strong>Año de Publicación:</strong> {{ $book->publication_year }}</p>
                        <p><strong>Editorial:</strong> {{ $book->publisher }}</p>
                        <p><strong>Cantidad de Páginas:</strong> {{ $book->page_count }}</p>
                        <p><strong>Precio:</strong> ${{ $book->price }}</p>
                        <a href="{{ route('books.index') }}" class="btn btn-primary"> Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection