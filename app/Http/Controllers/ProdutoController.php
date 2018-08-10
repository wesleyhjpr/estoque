<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;

class ProdutoController extends Controller{
    public function lista(){
        // nosso código vai aqui
        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
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
        //$resposta = DB::select('select * from produtos where id = ?',[$id]);
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }
    public function novo(){
        return view('produto.formulario');

    }
    public function adiciona(){
        // pegar dados do formulario
        // salvar no banco de dados
        // retornar alguma view
        /*
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
        return redirect('/produtos')->withInput(Request::only('nome'));
        */
        /*
        $produto = new Produto();
        $produto->nome = Request::input('nome');
        $produto->valor = Request::input('valor');
        $produto->descricao = Request::input('descricao');
        $produto->quantidade = Request::input('quantidade');
        */
        //$params = Request::all(); 
        //$produto = new Produto($params);
        //$produto->save();
        Produto::create(Request::all());
        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
    }
    //metodo que retorna em formato json
    public function listaJson(){
        //$produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        return $produtos;
        /** modo explicito
         *  return response()->json($produtos); 
         */
    }
    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }
}
        