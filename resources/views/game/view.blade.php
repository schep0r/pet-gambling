@extends('layouts.layout')

@section('content')
    <div class="flex flex-row">
        @foreach ($reels as $reel)
            <div class="basis-1/5">
                @foreach($reel as $element)
                    <p class="text-center">
                        {{ $element }}
                    </p>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
