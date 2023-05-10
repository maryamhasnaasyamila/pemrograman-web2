@php
    $name = "Hasna";
    $score = 90;
@endphp

@if ($score >= 60)
    @php $ket = "Lulus"; @endphp
@else
    @php $ket = "Gagal"; @endphp
@endif

Siswa {{ $name }} dengan nilai {{ $score }} dinyatakan {{ $ket }}