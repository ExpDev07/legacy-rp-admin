<?php

use App\User;
use App\Warning;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * @var string
     */
    private static $AVATAR_URL = 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/ee/eed2d38393036c9fce576737521e2ba35f6ca4ae_full.jpg';

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
                'avatar' => self::$AVATAR_URL
            ]);

            // An IP address.
            $ipAddress = $faker->ipv4;

            // Create a player for this user.
            $player = $user->player()->create([
                'name' => $user->username,
                'identifiers' => [ $user->identifier, $ipAddress ],
                'playtime' => $faker->numberBetween(0, 10000),
                'seen' => Carbon::now()
            ]);

            // Give the player some warnings and self as issuer.
            $player->warnings()->createMany([
                [ 'issuer_id' => $player->id, 'message' => $faker->sentence ],
                [ 'issuer_id' => $player->id, 'message' => $faker->sentence ],
                [ 'issuer_id' => $player->id, 'message' => $faker->sentence ]
            ]);

            // Log one action for this player.
            $player->logs()->create([
                'action' => strtoupper($faker->word),
                'details' => $faker->sentence,
                'metadata' => [ 'serverId' => 0 ]
            ]);

        }
    }
}
