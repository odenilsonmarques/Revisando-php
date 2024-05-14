<?php


echo "Exemplo com aspas duplas<br>";
$produto = "livro";
$preco = 25.99;

$mensagem = "O preço do $produto é R$ $preco.";
echo $mensagem."<br><br><br>"; // Saída: O preço do livro é R$ 25.99.





echo "Exemplo com aspas simples<br>";
$produto = "livro";
$preco = 25.99;

$mensagem = 'O preço do $produto é R$ $preco.';
echo $mensagem; // Saída: O preço do $produto é R$ $preco.


