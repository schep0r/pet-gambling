@extends('layouts.layout')

@section('content')
    <div class="flex flex-row">
        @foreach ($settings->getReel()->getStrips() as $strip)
            <div class="basis-1/5">
                @foreach($strip as $element)
                    <p class="text-center">
                        {{ $element }}
                    </p>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
