# Modelo de classes

Integração entre classes usando autoload

## Exemplo de utilização

* Criar um Autor

$autor = new Autor('2', 'Monteiro Lobato', 'Contista, ensaísta e tradutor, Lobato nasceu na cidade de Taubaté, interior de São Paulo, no ano de 1882.', '18/04/1882');

* Criar um Livro

$livro = new Livro($autor, 'Sítio do Pica-pau Amarelo', '1920', 'Editora da Revista do Brasil.');

* Criar uma Biblioteca

$biblioteca = new Biblioteca('Biblioteca Municipal Monteiro Lobato', 'Avenida Bento Gonçalves 443, Novo Hamburgo - RS', [ $livro ] );

## Imprimir objetos na tela

### Obter dados do Autor atrávez da biblioteca
$biblioteca->livros[0]->autor->codigo

$biblioteca->livros[0]->autor->nome

$biblioteca->livros[0]->autor->biografia

$biblioteca->livros[0]->autor->nascimento


### Obter dados do autor atravéz do Livro
$livro->autor->codigo

$livro->autor->nome

$livro->autor->biografia

$livro->autor->nascimento


### Obter dados do autor diretamente do objeto autor
$autor->codigo

$autor->nome

$autor->biografia

$autor->nascimento


### Obter dados do livro atravéz da Biblioteca
$biblioteca->livros[0]->titulo

$biblioteca->livros[0]->lancamento

$biblioteca->livros[0]->editora


### Obter dados do livro diretamente no objeto livro
$livro->titulo
$livro->lancamento
$livro->editora


### Obter dados da Biblioteca
$biblioteca->nome
$biblioteca->endereco