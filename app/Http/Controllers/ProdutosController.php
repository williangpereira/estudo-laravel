<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function listarProdutos()
    {
        $produtos = 
        [
            ['nome' => 'Deserto dos Tataros',
             'preco' => 30.5,
             'imagem' => 'Images/rounded.jpg'
            ],

            ['nome' => 'Admirável Mundo Novo',
             'preco' => 40.5,
             'imagem' => 'Images/alfons-morales-YLSwjSy7stw-unsplash.jpg'
            ],

            ['nome' => 'Lugar Nenhum',
             'preco' => 50.5,
             'imagem' => 'Images/rounded3.jpg'
            ],
             
        ];

        return view('produtos')->with('produtos', $produtos);
    }
}
