<?php

use App\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Faker to create data.
        $faker = Factory::create();

        // And now, let's create a few users in our database:
        for ($i = 0; $i < 50; $i++) {
            // Create a user with some properties.
            $user = User::create([
                'identifier' => 'steam:' . $faker->word . $faker->word . $faker->numberBetween(0, 10000000),
                'username' => $faker->name,
                'avatar' => 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ee/eed2d38393036c9fce576737521e2ba35f6ca4ae_full.jpg'
            ]);

            // An IP address.
            $ipAddress = $faker->ipv6;

            // Create a player for this user.
            $user->player()->create([
                'name' => $user->username,
                'identifiers' => json_encode([ $user->identifier, $ipAddress ]),
                'playtime' => $faker->numberBetween(0, 10000),
                'seen' => Carbon::now(),
            ]);
        }
    }
}
