<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariaveisController extends Controller
{

    private $nome = 'Luis';
    private $sobrenome = 'Sousa';
    private $profissao = 'Sou um estudante do IF aspirante a programador.';
    private $telefone = '+55 (37) 99812-4223';
    private $endereco = '';
    private $email = 'luismigueldesousa2707@gmail.com';
    private $nivel = 'Estudante';
    private $idade = '18 anos';
    private $cidade = 'Arcos, Minas Gerais, Brasil';
    private $nasc = '27/07/2004';
    private $desc = "Linguagens aprendidas: HTML, CSS, JavaScript, PHP, SQL e JAVA ";
    private $periodo = "2021 - 2023";
    private $instituicao = "IFMG";
    private $educ = 'Ensino médio com técnico integrado em informática';
    private $sobre = "Estudante do IFMG";
    private $emprego = "Estou precisando";
    private $habilidades = "Estas são algumas habilidades que possuo, algumas úteis, outras nem tanto :)";
    private $curso1 = "Técnico integrado em informática (em curso)";
    private $periodo1 = "2021 - 2023";
    private $local1 = "IFMG - Campus Formiga";
    private $curso2 = "Técnico em auxiliar administrativo (concluído)";
    private $local2 = "SENAI - Arcos";
    private $periodo2 = "2019 - 2019";
    private $experiencia = "Nenhuma até o momento";

    public function index ()
  {
    return view('index', 
    ['nome' => $this->nome, 'sobrenome' => $this->sobrenome, 'profissao' => $this->profissao, 'pagina' => 'Inicio']);
  }

  public function contact ()
  {
    return view('contact', ['nome' => $this->nome,
    'telefone' => $this->telefone, 'endereco'=> $this->endereco , 'pagina' => 'Contato', 'email' => $this->email]);
  }

  public function resume ()
  {
    return view('resume', ['nome' => $this->nome, 'sobrenome' => $this->sobrenome, 
    'desc'=> $this->desc, 'instituicao' => $this->instituicao, 'periodo' => $this->periodo, 
    'telefone' => $this->telefone,  'endereco'=> $this->endereco , 'pagina' => 'Resumo', 'email' => $this->email,
     'educ'=> $this->educ, 'curso1' => $this->curso1, 'curso2' => $this->curso2, 'periodo1' => $this->periodo1,
      'periodo2' => $this->periodo2, 'local1' => $this->local1, 'local2' => $this->local2, 'experiencia' => $this->experiencia]);

  }

  public function portfolio ()
  {
    return view('portfolio', ['nome' => $this->nome,'pagina' => 'Portfolio']);
  }

  public function about ()
  {
    return view('about', ['nome' => $this->nome,
    'telefone' => $this->telefone, 'endereco'=> $this->endereco , 'pagina' => 'Sobre', 'email' => $this->email, 'nasc' => $this->nasc, 'cidade' => $this->cidade,
  'idade' => $this->idade, 'nivel' => $this->nivel, 'emprego' => $this->emprego, 'sobre' => $this->sobre, 'habilidades' => $this->habilidades]);
  }

}
