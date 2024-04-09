@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Crear Nuevo Libro</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Título:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group">
                            <label for="author">Autor:</label>
                            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="publication_year">Año de Publicación:</label>
                            <input type="text" class="form-control" id="publication_year" name="publication_year" value="{{ old('publication_year') }}">
                        </div>
                        <div class="form-group">
                            <label for="publisher">Editorial:</label>
                            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}">
                        </div>
                        <div class="form-group">
                            <label for="page_count">Cantidad de Páginas:</label>
                            <input type="text" class="form-control" id="page_count" name="page_count" value="{{ old('page_count') }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Precio:</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection