@extends('layouts.master')

@section('title')
    Home
@endsection

@section('project')
    Franky
@endsection

@section('heading')
    Lorem Ipsum, Laravel is great!
@endsection

@section('body')
    <p class="lead">Hello. This is my first time experimenting with Laravel!</p>
    <p><a class="btn btn-lg btn-info" href="https://github.com/Cight" role="button">Github</a></p>
@endsection

@section('test')

    <h1>
        @if($gender == 'male')
            Male
        @elseif($gender == 'female')
            Female
        @else
            Unknown
        @endif
    </h1>

    <h1>
        {{-- Unless It's not empty, print out whatever is in var $text --}}

        @unless(empty($text))
            {{ $text }}
        @endunless
    </h1>

    {{-- If $text is set, display content from $text. Else, print text --}}
    <h1>
        {{ isset($text) ? $text: 'The variable does not exist' }}
    </h1>
    {{-- display if its set else, print text --}}
    <h1>
        {{ $text or 'Text does not exist!' }}
    </h1>
@endsection



