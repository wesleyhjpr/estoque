<?php 

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

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
}
        