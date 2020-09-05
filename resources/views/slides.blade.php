@extends('layouts.app')

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
        Добавить
    </button>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Добавить слайд</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Название</label>
                                <input type="text" class="form-control" id="name" value="Первый слайд" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="from">От</label>
                                <input type="datetime-local" class="form-control" id="from" value="@php echo date('Y-m-d\TH:i', strtotime(now())); @endphp" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="to">До</label>
                                <input type="datetime-local" class="form-control" id="to" value="@php echo date('Y-m-d\TH:i', strtotime('+30 days')); @endphp" required>
                            </div>
                        </div>
                        <div class="form-row d-flex align-items-end">
                            <div class="form-group col-md-2">
                                <label for="resolution">Разрешение</label>
                                <select class="custom-select" id="resolution" required>
                                    <option>1920x1024</option>
                                    <option>768x1024</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="name">Время отображения, сек.</label>
                                <input type="text" class="form-control" id="name" value="3" required>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="file" class="custom-file-label">Файл</label>
                                <input type="file" class="custom-file-input form-control" id="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="default">
                                <label class="form-check-label" for="default">По-умолчанию</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="active" checked>
                                <label class="form-check-label" for="active">Активный</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Добавить</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                </div>
            </div>
        </div>
    </div>
@endsection
