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
