<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller{
    public function lista(){
        // nosso código vai aqui
        $produtos = DB::select('select * from produtos');
        return view('produto.listagem')->withProdutos($produtos);
        /**
         * return view('listagem')->with('produtos', $produtos);
         * --------------------
         * return view('listagem', ['produtos' => $produtos]);
         * --------------------
         * $data = ['produtos' => $produtos];
         * return view('listagem', $data);
         * --------------------
         * $data = [];
         * $data['produtos'] = $produtos;
         * return view('listagem', $data);
         */
    }
    public function mostrar($id){
        //$id = Request::input('id', '0');
        //$id = Request::route('id');
        $resposta = DB::select('select * from produtos where id = ?',[$id]);
        if(empty($resposta)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $resposta[0]);
    }
    public function novo(){
        return view('produto.formulario');

    }
    public function adiciona(){
        // pegar dados do formulario
        // salvar no banco de dados
        // retornar alguma view
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $quantidade = Request::input('quantidade');
        $valor = Request::input('valor');
        //DB::insert('insert into produtos (nome, valor, descricao, quantidade) values (?,?,?,?)', array($nome, $valor, $descricao, $quantidade)); 
        DB::table('produtos')->insert(
            ['nome' => $nome,
            'valor' => $valor,
            'descricao' => $descricao,
            'quantidade' => $quantidade
            ]
            );
            
        return view('produto.adicionado')->with('nome', $nome);
    }
}
        