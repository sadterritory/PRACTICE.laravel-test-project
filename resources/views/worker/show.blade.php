@extends('layout.main')

@section('content')
<hr>
<div>
        <div>
            <div>Name:  {{ $worker->name }} </div>
            <div>Surname:  {{ $worker->surname }} </div>
            <div>Email:  {{ $worker->email }} </div>
            <div>Age:  {{ $worker->age }} </div>
            <div>Description:  {{ $worker->description }} </div>
            <div>Is married:  {{ $worker->is_married }} </div>
            <div>
                <a href="{{ route('worker.index') }}">Назад</a>
            </div>
        </div>
        <hr>
</div>

@endsection
