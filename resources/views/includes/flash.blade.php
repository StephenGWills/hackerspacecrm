@if (session()->has('status'))
    <div class="alert alert-{{ session('status-type') }} {{ session('status-dismissable') ? 'alert-dismissible' : '' }}">
        @if (session('status-dismissable'))
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @endif
        {{ session('status') }}
    </div>
@endif