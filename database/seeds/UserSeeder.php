<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::query()->forceDelete();

        for($i=1;$i<=1;$i++)
        {
            User::create(array(
                'username'  =>  'sincan',
                'name'      =>  'sincan',
                'password'  =>  Hash::make('sincan'),
                ));
        }
    }
}
