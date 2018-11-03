<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SellerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_seller_may_have_costs()
    {
        $seller = factory('App\Models\Seller')->create();
        $cost = factory('App\Models\Cost')->create(['seller_id' => $seller->id]);

        $this->assertInstanceOf('App\Models\Cost', $seller->costs->first());
    }
}
