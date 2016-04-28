@extends('app')

@section('content')
    <div class="container">
        <h3>Editando Categoria: {{$category->name}}</h3>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::model($category, ['route'=> ['admin.categories.update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('Name', 'Nome:') !!}
            {!! Form::text('name', null,['clss'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Categoria', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection