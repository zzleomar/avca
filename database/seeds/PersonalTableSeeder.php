<?php

use Illuminate\Database\Seeder;
use App\Personal;

class PersonalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Personal::class, 20)->create()
            ->each(function ($a) {
	           $a->empleado()->save(factory(App\Empleado::class)->make([
                     'sucursal_id' => $a->id,
    			     'cargo' => 'Subgerente de Sucursal',
			         ])
                );
                $a->empleado->administrativo()->create([]);
               $a->user()->save(factory(App\User::class)->make([
                            'tipo' => 'Subgerente de Sucursal',
                        ])
                );
	       });

	    factory(Personal::class, 20)->create()
            ->each(function ($u) {
               $u->empleado()->save(factory(App\Empleado::class)->make([
                        'sucursal_id' => ($u->id-20),
                        'cargo' => 'Operador de Trafico',
                        ])
                );
                $u->empleado->personal_operativo()->create([]);
                $u->user()->save(factory(App\User::class)->make([
                                'tipo' => 'Operador de Trafico',
                            ])
                    );
             });
        factory(Personal::class,1)->create()
            ->each(function ($u) {
               $u->empleado()->save(factory(App\Empleado::class)->make([
                        'sucursal_id' => 15,
                        'cargo' => 'Operador de Trafico',
                        ])
                );
                $u->empleado->personal_operativo()->create([]);
                $u->user()->create([
                        'username' => 'admin',
                        'tipo' => 'Operador de Trafico',
                        'password' => bcrypt('1234567'),
                        'email' => 'admin@gmail.com'
                        ]);
             });
        factory(Personal::class,1)->create()
            ->each(function ($u) {
               $u->empleado()->save(factory(App\Empleado::class)->make([
                        'sucursal_id' => 15,
                        'cargo' => 'Subgerente de Sucursal',
                        ])
                );
                $u->empleado->administrativo()->create([]);
                $u->user()->create([
                        'username' => 'admin2',
                        'tipo' => 'Subgerente de Sucursal',
                        'password' => bcrypt('1234567'),
                        'email' => 'admin2@gmail.com'
                        ]);
             });
        factory(Personal::class,1)->create()
            ->each(function ($u) {
               $u->empleado()->save(factory(App\Empleado::class)->make([
                        'sucursal_id' => 1,
                        'cargo' => 'Gerente de Sucursales',
                        ])
                );
                $u->empleado->administrativo()->create([]);
                $u->user()->create([
                        'username' => 'admin3',
                        'tipo' => 'Gerente de Sucursales',
                        'password' => bcrypt('1234567'),
                        'email' => 'admin3@gmail.com'
                        ]);
             });
        factory(Personal::class,1)->create()
            ->each(function ($u) {
               $u->empleado()->save(factory(App\Empleado::class)->make([
                        'sucursal_id' => 1,
                        'cargo' => 'Gerente General',
                        ])
                );
                $u->empleado->administrativo()->create([]);
                $u->user()->create([
                        'username' => 'admin4',
                        'tipo' => 'Gerente General',
                        'password' => bcrypt('1234567'),
                        'email' => 'admin4@gmail.com'
                        ]);
             });

        factory(Personal::class, 10)->create()
            ->each(function ($u) {
               $u->tripulante()->save(factory(App\Tripulante::class)->make([
                        'rango' => 'Piloto',
                        ])
                );
             });
        factory(Personal::class, 12)->create()
            ->each(function ($u) {
               $u->tripulante()->save(factory(App\Tripulante::class)->make([
                        'rango' => 'Copiloto',
                        ])
                );
             });
        factory(Personal::class, 12)->create()
            ->each(function ($u) {
               $u->tripulante()->save(factory(App\Tripulante::class)->make([
                        'rango' => 'Jefe de Cabina',
                        ])
                );
             });
        factory(Personal::class, 42)->create()
            ->each(function ($u) {
               $u->tripulante()->save(factory(App\Tripulante::class)->make([
                        'rango' => 'Sobrecargo',
                        ])
                );
             });


    }
}
