<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Collection;


class ShortenerUrl extends Model
{
    protected $fillable = [
        'url',
        'short_url'
    ];

    /**
     * Get items with simple pagination
     * @param int $iPage
     * @return mixed
     */
    static public function getUrlsWithPagination (int $iPage) {

        return self::latest()->simplePaginate($iPage);
    }

    /**
     * @param string $sData
     * @return object ShortenerUrl
     */
    static public function getByShortUrl(string $sData) {

        $obItem = ShortenerUrl::where('short_url', $sData)->first();
        $obItem->increment('conversion');
        $obItem->save();

        return $obItem;
    }

}
