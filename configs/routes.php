<?php

namespace Classes;

// Página inicial
Rotas::get( '', 'Livros@index' );

// Listar Autores
Rotas::get( 'escritores', 'Escritores@index' );

// Listar Todos os Livros
Rotas::get( 'livros', 'Livros@index' );
