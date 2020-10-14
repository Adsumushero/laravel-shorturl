@extends('layouts.main')

@section('content')

    <div class="history">
        <header class="history__header">
            <span class="history__title">Previously shortened</span>
        </header>
    <table class="history__table">
        <thead>
        <tr class="history__row">
            <th class="history__link">link</th>
            <th class="history__visits">visits</th>
            <th class="history__last-visited">last visited</th>
        </tr>

        </thead>
        <tbody>

        @foreach($arShortUrl as $obShortItem)
            <tr class="history__row">
                <td class="history__link">
                    <div class="link-info">
                        <div class="link-info__shortened">
                            <a href="{{ route('shortener.index') }}/{{ $obShortItem->short_url }}" target="_blank">
                                {{ route('shortener.index') }}/<span class="link-info__accent">{{ $obShortItem->short_url }}</span>
                            </a>
                        </div>
                        <div class="link-info__original">{{ $obShortItem->url }}</div>
                    </div>
                </td>
                <td class="history__visits">{{ $obShortItem->conversion }}</td>
                <td class="history__last-visited">{{ $obShortItem->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        <div class="paginate">
            {{ $arShortUrl->links() }}
        </div>
    </div>
@endsection

