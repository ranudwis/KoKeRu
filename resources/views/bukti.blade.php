@foreach ($bukti as $b)
    <div class="bukti_foto">
        <img class="foto" src="{{ Storage::url($b->bukti) }}">
    </div>
@endforeach
