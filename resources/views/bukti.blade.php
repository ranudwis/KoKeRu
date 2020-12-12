@foreach ($bukti as $b)
    <div class="bukti_foto">
        @if ($b->getType() == \App\Models\Bukti::TYPE_IMAGE)
            <a href="{{ Storage::url($b->bukti) }}" target="_blank">
                <img class="foto" src="{{ Storage::url($b->bukti) }}">
            </a>
        @elseif ($b->getType() == \App\Models\Bukti::TYPE_VIDEO)
            <video width="360" controls>
                <source src="{{ Storage::url($b->bukti) }}" type="{{ $b->getMime() }}" />

                Video tidak dapat diputar
            </video>
        @endif
    </div>
@endforeach
