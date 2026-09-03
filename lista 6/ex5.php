<?php

$opcao = 3;
echo '<h1 style="color: pink;">Barbie on a motorcycle 🏍️</h1><br>';
echo "1 - Jogar<br>";
echo "2 - Ver personagens<br>";
echo "3 - Ver ranking<br>";
echo "4 - Configurações<br>";
echo "5 - Sair<br><br>";

switch ($opcao){
  case 1:
    echo "Entrando no jogo...";
    break;
  case 2:
    echo "Entrando nos personagens...<br>";
    echo "Personagem Barbie 👱🏻‍♀️<br>";
    echo "Personagem Raquel 👩🏻<br>";
    echo "Personagem Ken 👱🏻‍♂️<br>";
    break;
  case 3:
    echo "Ranking...<br>";
    echo "1° lugar- maria@linda (❁´◡`❁)<br>";
    echo "2° lugar- ti4gui@mara (●'◡'●)<br>";
    echo "3° lugar- scott_fofo<br> ☆*: .｡. o(≧▽≦)o .｡.:*☆";
    break;
   case 4:
    echo "Abrindo as configurações...";
    break; 
   case 5:
    echo "Saindo da sessão...";
    break;
    defautl:
    echo "Opção inválida.";


}

