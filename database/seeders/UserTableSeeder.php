<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Armstrong';
        $user->email = 'admin@dragbox.io';
        $user->password = bcrypt('123456');
        $user->roles = 'super_admin';
        $user->uuid = (string) \Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Audrey';
        $user->email = 'team@dragbox.io';
        $user->password = bcrypt('123456');
        $user->roles= 'team';
        $user->uuid = (string) \Str::uuid();
        $user->save();

        $user = new User;
        $user->name = 'Anabelle';
        $user->email = 'support@dragbox.io';
        $user->password = bcrypt('123456');
        $user->roles= 'support';
        $user->uuid = (string) \Str::uuid();
        $user->save();
    }
}
