<?php

namespace Tests\Unit;

use App\Models\ShortenerUrl;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Event;


class ShortenerUrlTest extends TestCase
{
    use RefreshDatabase;
    private $urls;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this-> urls = new ShortenerUrl();

    }

    /**
     * A basic unit test example.
     *
     * @return void
     * @throws \Exception
     */
    public function testGetUrlsWithPagination()
    {
        $count = random_int(1,100);
        $test = $this -> urls -> getUrlsWithPagination($count);
        $this -> assertIsObject($test);
    }

    /**
     * @test
     */
    public function testGetByShortUrl()
    {
        factory(ShortenerUrl::class, 1)->create();

        $url = $this->urls->first();
        $test = $this -> urls -> getByShortUrl($url->short_url);

        $this -> assertNotEmpty($test);
        $this -> assertEquals('1', $test->conversion);

    }

}