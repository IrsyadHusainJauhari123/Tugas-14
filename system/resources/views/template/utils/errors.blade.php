@if ($errors->has($item))
    @foreach ($errors->get($item) as $msg)
        <span for="" class="label text-danger">{{ $msg }}</span>
    @endforeach
@endif
