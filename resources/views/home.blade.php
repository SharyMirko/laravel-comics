@extends('guest.template.base')
@section('titolo', 'Meglio Marvel')
@section('content')
    <div>
        <div class="content">
        </div>
        <div class="fullwidth">
            <div class="container">
                <div class="actual-series">current series</div>
                <div class="thumb-contain">
                    @foreach ($comics as $item)
                        <div class="thumbler">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                            <span>{{ $item['series'] }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="button">SING-UP NOW!</div>
            </div>
        </div>
    </div>
@endsection
