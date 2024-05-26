@if (session('message'))
    <div class="alert alert-success" role="alert">
        <strong>Succes ! </strong>

        {{ session('message') }}
    </div>
@endif
