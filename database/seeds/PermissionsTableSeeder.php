<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'user-create', 'guard_name' => 'web'],
            ['name' => 'user-edit', 'guard_name' => 'web'],
            ['name' => 'user-delete', 'guard_name' => 'web'],
            ['name' => 'user-show', 'guard_name' => 'web'],
            ['name' => 'user-index', 'guard_name' => 'web']
        ];

        Permission::insert($data);

        for($i = 1; $i <= count($data); $i++) {
            DB::table('role_has_permissions')->insert([
                'permission_id' => $i,
                'role_id' => 1,
            ]);
        }
    }
}
