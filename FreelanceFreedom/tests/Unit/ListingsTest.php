<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Listing;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;

class ListingsTest extends TestCase
{
    /**
     * A unit test to check if the login form is present.
     *
     * @return void
     */
    public function test_listings_available()
    {
        $response = $this->get('/listings');

        $response->assertOk();
    }
}
