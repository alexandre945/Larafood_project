@if ($errors->any())
<div class="alert-warning">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif
