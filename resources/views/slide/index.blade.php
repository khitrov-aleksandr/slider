@extends('layouts.app')

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
        Добавить
    </button>
    @include('slide.store_modal')
    <table class="table">
        <thead>
        <tr>
            <td>Название</td>
            <td>Имя файла</td>
            <td>Дата отображения</td>
            <td>Длительность</td>
            <td>Очерёдность(вес)</td>
            <td>По-умолчанию</td>
            <td>Активен</td>
        </tr>
        </thead>
        <tbody>
        @foreach($slides as $slide)
            <tr>
                <td>{{ $slide->name }}</td>
                <td>{{ $slide->file }}</td>
                <td>{{ $slide->date_from }}</td>
                <td>{{ $slide->show_time }}</td>
                <td>{{ $slide->order }}</td>
                <td>{{ $slide->is_default }}</td>
                <td>{{ $slide->is_active }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
