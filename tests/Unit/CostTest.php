<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_cost_may_have_seller()
    {
        $seller = factory('App\Models\Seller')->create();
        $cost = factory('App\Models\Cost')->create(['seller_id' => $seller->id]);

        $this->assertInstanceof('App\Models\Seller', $cost->seller);
    }
}
