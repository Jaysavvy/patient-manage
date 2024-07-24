<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles
        $patientRole = Role::create(['name' => 'patient', 'guard_name' => 'web']);
        $doctorRole = Role::create(['name' => 'doctor', 'guard_name' => 'web']);
        $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'web']);

        // Create permissions
        $permissions = [
            'view patients',
            'create patients',
            'edit patients',
            'delete patients',
            'view doctors',
            'create doctors',
            'edit doctors',
            'delete doctors',
            'manage users',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        // Assign permissions to roles
        $patientRole->givePermissionTo(['view patients']);
        $doctorRole->givePermissionTo(['view patients', 'edit patients', 'view doctors']);
        $adminRole->givePermissionTo(Permission::all());
    }
}
