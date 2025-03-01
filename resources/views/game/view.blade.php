@extends('layouts.layout')

@section('content')

    <form action="{{ route('games.spin', ['game' => $game]) }}" method="post">
        @csrf
        <button type="submit" class="flex items-center bg-blue-500 px-4 py-3 text-white hover:bg-blue-400">Play</button>
    </form>

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
