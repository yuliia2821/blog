@extends('main')
@section('title','|Create new post')
@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Создание нового поста</h1>
            <hr>

            {!! Illuminate\Html\FormFacade::open (array('route'=>'posts.store','data-parsley-validate'=>''))!!}

            {{ Form::label('title','Название:') }}
            {{ Form::text('title',null, array('class'=>'form-control','required'=>'','maxlength'=>'60'))}}

            {{ Form::label('body',"Пост:") }}
            {{ Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}

            {{ Form::submit('Опубликовать',array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px')) }}

            {!!Form::close() !!}

        </div>
</div>
@endsection

