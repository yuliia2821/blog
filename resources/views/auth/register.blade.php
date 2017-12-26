@extends('main')
@section('title', '|Register')
@section('content')

    <div class="reg">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! \Illuminate\Html\FormFacade::open() !!}

            {{\Illuminate\Html\FormFacade::label('name', 'Имя:') }}
            {{\Illuminate\Html\FormFacade::text('name', null, ['class'=> 'form-control']) }}

            {{\Illuminate\Html\FormFacade::label('email', 'Email:') }}
            {{\Illuminate\Html\FormFacade::email('email', null, ['class'=> 'form-control']) }}

            {{\Illuminate\Html\FormFacade::label('password', 'Пароль:') }}<br>
            {{\Illuminate\Html\FormFacade::password('password', null, ['class'=> 'form-control']) }}<br>


            {{\Illuminate\Html\FormFacade::label('password_confirmation', 'Повторить пароль:') }}<br>
            {{\Illuminate\Html\FormFacade::password('password_confirmation', null, ['class'=> 'form-control']) }}<br>


            {{\Illuminate\Html\FormFacade::submit('Регистрация',['class'=> 'btn btn-primary btn-block']) }}

            {!! \Illuminate\Html\FormFacade::close() !!}


        </div>
    </div>
    </div>
@endsection