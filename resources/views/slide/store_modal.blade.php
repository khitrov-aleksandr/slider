<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form method="POST" action="/slides" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Добавить слайд</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" value="Первый слайд" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="date_from">От</label>
                        <input type="datetime-local" class="form-control" id="date_from" name="date_from"
                               value="@php echo date('Y-m-d\TH:i', strtotime(now())); @endphp" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="date_to">До</label>
                        <input type="datetime-local" class="form-control" id="date_to" name="date_to"
                               value="@php echo date('Y-m-d\TH:i', strtotime('+30 days')); @endphp" required>
                    </div>
                </div>
                <div class="form-row d-flex align-items-end">
                    <div class="form-group col-md-9">
                        <label for="file" class="custom-file-label">Выберите файл</label>
                        <input type="file" class="custom-file-input form-control" id="file" name="file" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="resolution_id">Разрешение</label>
                        <select class="custom-select" id="resolution_id" name="resolution_id" required>
                            @foreach($resolutions as $resolution)
                                <option value="{{ $resolution->id }}">{{ $resolution->size }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-row d-flex align-items-end">
                        <div class="form-group col-md-6">
                            <label for="show_time">Время отображения, сек.</label>
                            <input type="text" class="form-control" id="show_time" name="show_time" value="3"
                                   required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="order">Очерёдность(вес)</label>
                            <input type="text" class="form-control" id="order" name="order" value="5" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check form-check-inline mb-2 ml-2">
                            <input class="form-check-input" type="checkbox" id="is_default" name="is_default">
                            <label class="form-check-label" for="is_default">По-умолчанию</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                   checked>
                            <label class="form-check-label" for="is_active">Активный</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
            </div>
        </form>
    </div>
</div>
