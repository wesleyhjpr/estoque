<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProdutoTableSeeder::class);
    }
}
class ProdutoTableSeeder extends Seeder
{
    public function run(){
        // código vai aqui
        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', array('Geladeira', 590.00, 'Side by Side com gelo na porta', 2));
        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', array('Fogão', 950.00, 'Painel automático e forno elétrico', 5));
        DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', array('Microondas', 152.00, 'Manda SMS quando termina de esquentar', 1));          
    }
}