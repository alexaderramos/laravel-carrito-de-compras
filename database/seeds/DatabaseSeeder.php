<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//       $this->call(UsersTableSeeder::class);
        \Bakery\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123123123'),
            'is_admin'=>true,
            'remember_token' => str_random(10),
        ]);

        \Bakery\Categoria::create([
            'nombrec'=>'Desayunos', 'descripcion'=>'Molestiae exercitationem qui ex minima reprehenderit blanditiis deleniti.'
        ]);

        \Bakery\Categoria::create([
            'nombrec'=>'Almuerzos', 'descripcion'=>'Modi et et corrupti molestias distinctio.'
        ]);

        \Bakery\Categoria::create([
            'nombrec'=>'Cenas', 'descripcion'=>'Aliquam corrupti fugit sed.'
        ]);


    }
}
