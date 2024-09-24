<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class InternalUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create super admin
        if (filled(config('auth.super_admin.email')) && filled(config('auth.super_admin.password'))) {
            $userModel = User::firstOrCreate([
                'email' => config('auth.super_admin.email'),
            ], [
                'email' => config('auth.super_admin.email'),
                'name' => 'Super Admin',
                'password' => Hash::make(config('auth.super_admin.password')),
            ]);
            $userModel->syncRoles([RoleEnum::SUPER_ADMIN]);
        }
    }
}
