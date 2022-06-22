@extends('adminlte::page')

@section('content')
    <h3>Novo Associado</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'associado.store']) !!}

        <!-- //Nome -->
        <div class="form-group">
                {!! Form::label('nome', 'Nome:') !!}
                {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
        </div>

         <!-- //Cargo -->
         <div class="form-group">
                {!! Form::label('cargo', 'Cargo:') !!}
                {!! Form::text('cargo', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <!-- //Email -->
        <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <!-- //Dt-nascimento -->
        <div class="form-group">
                {!! Form::label('dt_nascimento', 'Dt_nascimento:') !!}
                {!! Form::date('dt_nascimento', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <!-- //Dt-admissão -->
        <div class="form-group">
                {!! Form::label('dt_admissao', 'Dt_admissao:') !!}
                {!! Form::date('dt_admissao', null, ['class'=>'form-control', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Ator', ['class'=>'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}
@stop