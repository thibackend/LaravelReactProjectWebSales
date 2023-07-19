<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            'admin',
            'user'
        ];
        $countrole = role::all()->count();

        if ($countrole === 0) :
            foreach ($role as $value) :
                $r = new role();
                $r->name = $value;
                $r->save();
            endforeach;
        endif;
    }
}
