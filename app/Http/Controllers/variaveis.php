<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class variaveis extends Controller
{

    private $nome = 'Luis';
    private $sobrenome = 'Sousa';
    private $profissao = 'Estudante de informática do IF';
    private $telefone = '+55 (37) 99812-4223';
    private $endereco = '';
    private $email = 'luismigueldesousa2707@gmail.com';
    private $nivel = '';
    private $idade = '18 anos';
    private $cidade = 'Formiga, MG';
    private $nasc = '27/07/2004';
    private $desc = "Linguagens aprendidas: HTML, CSS, JavaScript, PHP, SQL e JAVA ";
    private $periodo = "2021 - 2023";
    private $instituicao = "IFMG";
    private $educ = 'Ensino médio com técnico integrado em informática';

    public function index ()
  {
    return view('index', 
    ['nome' => $this->nome, 'sobrenome' => $this->sobrenome, 'profissao' => $this->profissao, 'pagina' => 'Inicio']);
  }

  public function contact ()
  {
    return view('contact', ['nome' => $this->nome,
    'telefone' => $this->telefone, 'end'=> $this->end , 'pagina' => 'Contato', 'email' => $this->email]);
  }

  public function resume ()
  {
    return view('resume', ['nome' => $this->nome, 'sobrenome' => $this->sobrenome, 
    'desc'=> $this->desc, 'instituicao' => $this->instituicao, 'periodo' => $this->periodo, 
    'telefone' => $this->telefone,  'end'=> $this->end , 'pagina' => 'Resumo', 'email' => $this->email, 'educ'=> $this->educ]);

  }

  public function portfolio ()
  {
    return view('portfolio', ['nome' => $this->nome,'pagina' => 'Portfolio']);
  }

  public function about ()
  {
    return view('about', ['nome' => $this->nome,
    'telefone' => $this->telefone, 'end'=> $this->end , 'pagina' => 'Sobre', 'email' => $this->email, 'nasc' => $this->nasc, 'cidade' => $this->cidade,
  'idade' => $this->idade, 'nivel' => $this->nivel, 'port' => $this->port]);
  }

}
