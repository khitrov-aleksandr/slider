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
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="from">От</label>
                                <input type="datetime-local" class="form-control" id="from">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="to">До</label>
                                <input type="datetime-local" class="form-control" id="to">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="resolution">Разрешение</label>
                                <select class="custom-select" id="resolution" required>
                                    <option selected disabled value="">Выберите...</option>
                                    <option>1920x1024</option>
                                    <option>768x1024</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="default">
                                    <label class="form-check-label" for="default">По-умолчанию</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="active">
                                <label class="form-check-label" for="active">Активный</label>
                                </div>
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
