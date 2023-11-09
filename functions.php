<?php

function load_scripts(){
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
    // carrega o scripts do bootstrap no wordpress
    
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',array(), '5.3.2' ,'all' );
    // carrega o css do bootstrap

    wp_enqueue_style( 'template', get_template_directory_uri().'/css/template.css',array(), '1.0' ,'all' );
    // 1° Identificador, 2°get do template do diretorio, url do diretoro, array para caso precise carregar uma folha de estilo antes da repassada no diretorio e a versão(a versão não é obrigatório), selecionar o tipo de mídia.
}

add_action( 'wp_enqueue_scripts', 'load_scripts'); 
// passar o nome do gancho que vamos usar e o nome da função criada.

