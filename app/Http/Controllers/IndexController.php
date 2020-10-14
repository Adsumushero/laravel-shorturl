<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ShortenerUrl;


class IndexController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

      return view('pages/index');

    }


    /**
     * @param ShortUrl $request FormRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ShortUrl $request) {

        $request->validated();

        $arDataLink = [
            'url' => $request->url,
            'short_url' => Str::random(7)
        ];

        ShortenerUrl::create($arDataLink);
        return redirect()->route('shortener.index')->with('message', $arDataLink['short_url']);
    }

    /**
     * Dashboard page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashBoard() {

        return view('pages/dashboard', [
            'arShortUrl' => ShortenerUrl::getUrlsWithPagination(10)
        ]);
    }

    /**
     * Redirect short url to full
     * @param $sShortUrl String
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirect($sShortUrl) {

        $obItem = ShortenerUrl::getByShortUrl($sShortUrl);
        return redirect($obItem->url);
    }
}
