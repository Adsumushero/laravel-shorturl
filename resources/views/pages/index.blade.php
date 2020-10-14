@extends('layouts.main')

@section('content')
    <header class="main-header">
        <span class="main-header__logo">Laravel ShortURL</span>
        <span class="main-header__motto">The link shortener with a long name</span>
    </header>

    <form method="POST">
        <div class="shoort">
            @csrf
            <input class="shoort__input" name="url" type="text" placeholder="Paste the link you want to shorten here">
            <button class="shoort__btn" type="submit">Shorten this link</button>
        </div>
    </form>

    <div class="history">
        <header class="history__header">
            <span class="history__title">View conversion statistics</span>
            <a class="history__clear-btn" href="{{ route('shortener.index') }}/dashboard">Dashboard</a>
        </header>
        @if(session()->has('message'))
            <span class="history__title" style="display:block;">Your shortened URL:
                <a class="history__clear-btn" href="{{ route('shortener.index') }}/{{ Session::get('message') }}" target="_blank">{{ route('shortener.index') }}/{{ Session::get('message') }}</a>
            </span>
        @endif
    </div>
@endsection
