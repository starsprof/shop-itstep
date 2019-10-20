@extends('layouts.frontend')

@section('content')

        <div class="slider">
            <div class="slider-image">
                <img class=""  src="{{ asset('img/7e305d15065923a6fbec1d0dcf8f2369.jpg') }}">
                <img class=""  src="{{ asset('img/d1cdb29851187b78892873a1d1440b7d.jpg') }}">
                <img class=""  src="{{ asset('img/ed08576c67ad49e19700e17627a9b0dc.jpg') }}">
                <img class=""  src="{{ asset('img/d1cdb29851187b78892873a1d1440b7d.jpg') }}">
            </div>
            <div class="slider-button">
                <button class="slider-button-cont prev">Prev</button>
                <button class="slider-button-cont next">Next</button>
            </div>
        </div>

@endsection

@push('scripts')
    <script src="{{asset('js/slider.js')}}"></script>
@endpush