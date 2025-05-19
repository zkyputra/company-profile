@extends('layout.template')
@section('content')

@foreach ( $kontak as $row )
<hr class="featurette-divider">
<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
    <br>
        <h2 class="featurette-heading "></h2>
        <p class="text"></p>
    </div>
</div>
@endforeach

@endsection
