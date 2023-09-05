<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
// use Illuminate\Http\RapatController;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Hapus semua data user yang ada di database
        // DB::table('users')->delete();

        // Tambahkan data user baru
        User::create([
            'name' => 'Admin',
            'username' => 'admin1',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User',
            'username' => 'user1',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
    
}
