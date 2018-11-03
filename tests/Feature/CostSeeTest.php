<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CostSeeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function a_user_may_see_his_costs()
    {
        $user = factory('App\Models\User')->create();
        $this->be($user);
        $cost = factory('App\Models\Cost')->create(['user_id' => $user->id]);

        $this->get('costs')->assertSee($cost->title);
        $this->get('costs/'.$cost->id)->assertSee($cost->title);
    }

    /**
     * @test
     */
    public function a_guest_may_not_see_costs()
    {
        $cost = factory('App\Models\Cost')->create();

        $this->get('costs')->assertRedirect('login');
        $this->get('costs/'.$cost->id)->assertRedirect('login');

    }
}
