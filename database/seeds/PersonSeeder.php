<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*
         DB::table('people')->insert([
        'id' => '159113930',
        'name' => 'Flavio',
        'last_name_p' => 'Saez',
        'last_name_m' => 'Chandia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '138671151',
        'name' => 'Fernando Ariel',
        'last_name_p' => 'Silva',
        'last_name_m' => 'Godoy',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156946664',
        'name' => 'Exequiel',
        'last_name_p' => 'Carrizo',
        'last_name_m' => 'Diaz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184048264',
        'name' => 'Felipe Camilo',
        'last_name_p' => 'Calfin',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156919802',
        'name' => 'Marco',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Garcia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '184214954',
        'name' => 'Ivan',
        'last_name_p' => 'Betancourt',
        'last_name_m' => 'Valencia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '174326657',
        'name' => 'Borys Patricio',
        'last_name_p' => 'Rojas',
        'last_name_m' => 'Salazar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016348109K',
        'name' => 'Cristian',
        'last_name_p' => 'Solis',
        'last_name_m' => 'Salvo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131362617',
        'name' => 'Cristian Alexis',
        'last_name_p' => 'Perez',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '161359858',
        'name' => 'Juan Manuel',
        'last_name_p' => 'Veliz',
        'last_name_m' => 'Medero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '017094299K',
        'name' => 'Manuel',
        'last_name_p' => 'Collao',
        'last_name_m' => 'Gutierrez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '143797090',
        'name' => 'FRANCISCO JAVIER',
        'last_name_p' => 'NILO',
        'last_name_m' => 'GALLARDO',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129430435',
        'name' => 'Mauro',
        'last_name_p' => 'Ardiles',
        'last_name_m' => 'Gloria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84022012',
        'name' => 'Guillermo',
        'last_name_p' => 'Avalos',
        'last_name_m' => ' ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160860316',
        'name' => 'Juan Francisco ',
        'last_name_p' => 'Coñoman',
        'last_name_m' => 'Briones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '125763774',
        'name' => 'Francisco',
        'last_name_p' => 'Torres',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '183173006',
        'name' => 'Diego Alexis',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Gallardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '175537031',
        'name' => 'Daniel Alejandro',
        'last_name_p' => 'Garcia',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '168055854',
        'name' => 'ELIAS GABRIEL ',
        'last_name_p' => 'JARA',
        'last_name_m' => 'MARTINEZ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155144173',
        'name' => 'Raul Osman',
        'last_name_p' => 'Ojeda',
        'last_name_m' => 'Rojas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132193320',
        'name' => 'Jose',
        'last_name_p' => 'Chavez',
        'last_name_m' => 'Valencia',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119046750',
        'name' => 'RICARDO ',
        'last_name_p' => 'MARIN',
        'last_name_m' => 'SALAZAR',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166875331',
        'name' => 'Bastián ',
        'last_name_p' => 'Torres ',
        'last_name_m' => 'Varas ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '119019397',
        'name' => 'Marcelo',
        'last_name_p' => 'Gutierres',
        'last_name_m' => 'Mardones',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105310013',
        'name' => 'Felix',
        'last_name_p' => 'Vega',
        'last_name_m' => 'Fernandez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '156925683',
        'name' => 'VICTOR ALBERTO',
        'last_name_p' => 'VILLCA',
        'last_name_m' => 'ALAVE',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124415594',
        'name' => 'Marco',
        'last_name_p' => 'Meza',
        'last_name_m' => 'Antunez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122159302',
        'name' => 'Nasslo',
        'last_name_p' => 'Altamirano',
        'last_name_m' => 'Leposte',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '016436156K',
        'name' => 'Paula',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Iturra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131785763',
        'name' => 'Ema Isabel ',
        'last_name_p' => 'Gallardo ',
        'last_name_m' => 'Saavedra',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '84961566',
        'name' => 'Armando',
        'last_name_p' => 'Quezada',
        'last_name_m' => 'Pizarro',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124261643',
        'name' => 'Francisco Fabian',
        'last_name_p' => 'Rivera',
        'last_name_m' => 'Araos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '007440720K',
        'name' => 'Juan',
        'last_name_p' => 'Sainz',
        'last_name_m' => 'Pardo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162343696',
        'name' => 'Jesus',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Puentes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '139905598',
        'name' => 'Hector ',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Morales',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162585401',
        'name' => 'Manuel',
        'last_name_p' => 'Callpa',
        'last_name_m' => 'Carrazana',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '182391425',
        'name' => 'Susana',
        'last_name_p' => 'Bracho',
        'last_name_m' => 'Rosas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187918596',
        'name' => 'Cesar ',
        'last_name_p' => 'Ferrer',
        'last_name_m' => 'Vega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '116148358',
        'name' => 'Claudio',
        'last_name_p' => 'Aguilar',
        'last_name_m' => 'Rodriguez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '124247977',
        'name' => 'Hector Vladimir',
        'last_name_p' => 'Antiquera',
        'last_name_m' => 'Cortes',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '190989836',
        'name' => 'Darién',
        'last_name_p' => 'Araya',
        'last_name_m' => 'López',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155192712',
        'name' => 'DAMO',
        'last_name_p' => 'BENITEZ',
        'last_name_m' => 'VERGARA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '167235166',
        'name' => 'Abelardo',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Araya',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155750472',
        'name' => 'Annie Paulina',
        'last_name_p' => 'Herrera',
        'last_name_m' => 'Molina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '132249431',
        'name' => 'Rodrigo Alexis',
        'last_name_p' => 'Jorquera',
        'last_name_m' => 'Lamas',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '140077445',
        'name' => 'Jose',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Tobar',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '162427989',
        'name' => 'Dany',
        'last_name_p' => 'Prieto',
        'last_name_m' => 'Campos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '112195335',
        'name' => 'RAUL',
        'last_name_p' => 'RIVADENEIRA',
        'last_name_m' => 'CONTRERAS',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170968808',
        'name' => 'Carlos Francisco',
        'last_name_p' => 'Saa',
        'last_name_m' => 'Gonzalez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93381807',
        'name' => 'Juan Carlos',
        'last_name_p' => 'Valdivia',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '155145153',
        'name' => 'Andrés Antonio',
        'last_name_p' => 'Avalos',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '015763433K',
        'name' => 'Enrique Ignacio',
        'last_name_p' => 'Hidalgo',
        'last_name_m' => 'Palavicino',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '187934265',
        'name' => 'Agustin',
        'last_name_p' => 'Pizarro',
        'last_name_m' => 'Navea',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '81601771',
        'name' => 'Jorge',
        'last_name_p' => 'Vera',
        'last_name_m' => 'Oyarzun',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '177360767',
        'name' => 'Diego Andres',
        'last_name_p' => 'Campos ',
        'last_name_m' => 'Contreras',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '169269157',
        'name' => 'FERNANDO',
        'last_name_p' => 'TAPIA',
        'last_name_m' => '-',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '90978764',
        'name' => 'Marco',
        'last_name_p' => 'Rebolledo',
        'last_name_m' => 'Romero',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150440882',
        'name' => 'Cristian',
        'last_name_p' => 'Araya',
        'last_name_m' => 'Robles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '78612819',
        'name' => 'Ivan',
        'last_name_p' => 'Alvayay',
        'last_name_m' => 'Ossandon',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '018235323K',
        'name' => 'Jhon',
        'last_name_p' => 'Gonzalez',
        'last_name_m' => 'Lagos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '115183133',
        'name' => 'Omar Nelson',
        'last_name_p' => 'Tejos',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '134263156',
        'name' => 'Gonzalo',
        'last_name_p' => 'Lago',
        'last_name_m' => 'Perez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '165494768',
        'name' => 'Jessica',
        'last_name_p' => 'Arias',
        'last_name_m' => 'Castillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '160513225',
        'name' => 'Lixy Jaqueline',
        'last_name_p' => 'Ortiz',
        'last_name_m' => 'Chavez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '126094531',
        'name' => 'Paul ',
        'last_name_p' => 'Pierola',
        'last_name_m' => 'Mesina',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '93190556',
        'name' => 'Eleacin Omar',
        'last_name_p' => 'Alegria',
        'last_name_m' => 'Fabrega',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '86985365',
        'name' => 'Belarmino',
        'last_name_p' => 'Ramirez',
        'last_name_m' => 'Avalos',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '145939402',
        'name' => 'Milton Cuper',
        'last_name_p' => 'Calahuana',
        'last_name_m' => 'Muñoz',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123957172',
        'name' => 'Luis',
        'last_name_p' => 'Barrera',
        'last_name_m' => 'Silva',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '172775853',
        'name' => 'Cristobal',
        'last_name_p' => 'Robledo',
        'last_name_m' => 'Medalla',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '166142261',
        'name' => 'Nataly Alejandra ',
        'last_name_p' => 'Rebolledo',
        'last_name_m' => 'Ardiles',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '170930010',
        'name' => 'Julio Alejandro',
        'last_name_p' => 'Contreras',
        'last_name_m' => 'Coria',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128053905',
        'name' => 'Carlos Francisco ',
        'last_name_p' => 'Pinto ',
        'last_name_m' => 'Reyes ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '109367753',
        'name' => 'Angel',
        'last_name_p' => 'Diaz',
        'last_name_m' => 'Humeres',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '122389928',
        'name' => 'Claudio',
        'last_name_p' => 'Muñoz',
        'last_name_m' => 'Maldonado',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '158101122',
        'name' => 'Rodrigo',
        'last_name_p' => 'Lopez',
        'last_name_m' => 'Jimenez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '123478134',
        'name' => 'Alejandro',
        'last_name_p' => 'Cortes',
        'last_name_m' => 'Gallardo ',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '101516970',
        'name' => 'Carlos Eduardo ',
        'last_name_p' => 'Araya ',
        'last_name_m' => 'Garay',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '150145805',
        'name' => 'JUAN',
        'last_name_p' => 'CORTES',
        'last_name_m' => 'ACUÑA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '105229038',
        'name' => 'Fernando Alberto',
        'last_name_p' => 'Sanchez',
        'last_name_m' => 'Lillo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '131785356',
        'name' => 'PAOLO',
        'last_name_p' => 'VIVAR',
        'last_name_m' => 'ARAYA',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '129733063',
        'name' => 'Ricardo Andres',
        'last_name_p' => 'Cerda',
        'last_name_m' => 'Crisostomo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '128363203',
        'name' => 'Ronaldo Jose',
        'last_name_p' => 'Tapia',
        'last_name_m' => 'Lopez',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '163508435',
        'name' => 'Hernan Rodrigo',
        'last_name_p' => 'Avila',
        'last_name_m' => 'Mena',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
         DB::table('people')->insert([
        'id' => '176551607',
        'name' => 'Maykel Andres',
        'last_name_p' => 'Aguirre',
        'last_name_m' => 'Trigo',
        'deleted'=> false,
        'created_at'=> new DateTime,
        'updated_at'=> new DateTime
        ]);
            DB::table('people')->insert([
            'id' => '012691151-3',
            'name' => 'Fernando andres',
            'last_name_p' => 'Melo',
            'last_name_m' => 'miranda',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
            ]);
             DB::table('people')->insert([
            'id' => '017387633-5',
            'name' => 'Carlos',
            'last_name_p' => 'Gomez',
            'last_name_m' => 'galdames',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
            ]);
             DB::table('people')->insert([
            'id' => '014457421-4',
            'name' => 'Ruben Jaime',
            'last_name_p' => 'Santa Cruz',
            'last_name_m' => 'Cabezas',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
            ]);
             DB::table('people')->insert([
            'id' => '007367179-5',
            'name' => 'Hector Jaime',
            'last_name_p' => 'Santibañez',
            'last_name_m' => 'Tapia',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
            ]);


            DB::table('people')->insert([
                'id' => '000000000-0',
                'name' => '--',
                'last_name_p' => '--',
                'last_name_m' => '--',
                'deleted'=> false,
                'created_at'=> new DateTime,
                'updated_at'=> new DateTime
                ]);



*/
        DB::table('people')->insert([
            'id' => '012691151-3',
            'name' => 'Fernando andres',
            'last_name_p' => 'Melo',
            'last_name_m' => 'miranda',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('people')->insert([
            'id' => '017387633-5',
            'name' => 'Carlos',
            'last_name_p' => 'Gomez',
            'last_name_m' => 'galdames',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('people')->insert([
            'id' => '013426315-6',
            'name' => 'Gonzalo',
            'last_name_p' => 'Lago',
            'last_name_m' => 'Perez',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
        DB::table('people')->insert([
            'id' => '016051322-5',
            'name' => 'Lixy Jaqueline',
            'last_name_p' => 'Ortiz',
            'last_name_m' => 'Chavez',
            'deleted'=> false,
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

    }


}
