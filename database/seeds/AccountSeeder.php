<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'name' => 'Plazfer',
            'code' => 'plazfer.cl',
            'logo' => 'https://yoplanificobucket.s3-sa-east-1.amazonaws.com/noticias/CZqbcZwdgKrsUXOSTHwHkDmfrZZ6qbuoC57Maimx.png',

            'config' => '{"colores":{"app_logo":"#2e3d50","app_main_menu":"bg-blue-dark","app_navbar":"#fff","app_main_content":"#f5f7fa"}}',/*[
                'colores' => [
                    'app_logo' => "#2e3d50",
                    'app_main_menu' => "#3c4e62",
                    'app_navbar' => "#fff",
                    'app_main_content' => "#f5f7fa"
                ]
            ],*/
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('accounts')->insert([
            'name' => 'Test',
            'code' => 'test.cl',
            'logo' => 'https://yoplanificobucket.s3-sa-east-1.amazonaws.com/noticias/CZqbcZwdgKrsUXOSTHwHkDmfrZZ6qbuoC57Maimx.png',

            'config' => '{"colores":{"app_logo":"#2e3d50","app_main_menu":"#2e3d50","app_navbar":"#fff","app_main_content":"#f5f7fa"}}',/*[
                'colores' => [
                    'app_logo' => "#2e3d50",
                    'app_main_menu' => "#3c4e62",
                    'app_navbar' => "#fff",
                    'app_main_content' => "#f5f7fa"
                ]
            ],*/
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        DB::table('type_racks')->insert([
            'name' => '26 Bandejas',
            'quantity' => 26,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'account_id' => 1
        ]);

        DB::table('type_racks')->insert([
            'name' => '33 Bandejas',
            'quantity' => 33,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'account_id' => 1
        ]);

        DB::table('type_racks')->insert([
            'name' => '4 Pisos * 50 Bandejas',
            'quantity' => 200,
            'deleted' => false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime,
            'account_id' => 1
        ]);
    }
}
