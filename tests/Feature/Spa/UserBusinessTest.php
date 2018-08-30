<?php

namespace Tests\Feature\Spa;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Business;


class UserBusinessTest extends TestCase
{
	use WithFaker;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_business_not_created()
    {
        $user = $this->createAdvertiser();

		$response = $this->actingAs($user)
						->get('/spa/user/business');

		$response->assertStatus(200)
			->assertJson(['notCreated' => 'Business not created!']);
	}

	public function test_create_business()
	{
		$user = $this->createAdvertiser();
	}
}