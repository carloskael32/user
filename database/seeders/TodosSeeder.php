<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin=User::create([
            'name'=> 'admin paula',
            'email'=>'admin@gmail.com',
            'password'=> Hash::make('admin'),
            'fullacces'=>'yes',
            'codigo'=>'adn1',
        ]);

        $useradmin=User::create([
            'name'=> 'usuario marcos',
            'email'=>'marcos@gmail.com',
            'password'=> Hash::make('marcos'),
            'fullacces'=>'no',
            'codigo'=>'casa1',

        ]);

    }
}
