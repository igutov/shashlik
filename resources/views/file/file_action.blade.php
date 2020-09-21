@extends('voyager::master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ url('/export') }}" role="button">Получить файл</a>

        <form class="form-signin" action="{{ url('/import') }}" method="post" enctype="multipart/form-data"
            accept-charset="UTF-8">
            @csrf

            <div class="custom-file">
                <input name="file" type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Выберите файл</label>
            </div>
            <button class="btn btn-primary" type="submit">Отправить файл</button>
        </form>
    </div>
@endsection
