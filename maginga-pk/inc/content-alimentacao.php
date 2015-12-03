<?php 
add_action('init', 'alimentacao_register_post_type');
  function alimentacao_register_post_type() {
    register_post_type('alimentacao', array(
      'labels' => array(
      'name' => 'Alimentação',
      'singular_name' => 'Alimentação',
      'add_new' => 'Adicionar Novo',
      'edit_item' => 'Editar',
      'new_item' => 'Nova',
      'view_item' => 'Visualizar',
      'search_items' => 'Buscar',
      'not_found' => 'Não foi encontrada a loja',
      'not_found_in_trash' => 'A loja não foi encontrada no lixo'
    ),
    'public' => true,
    'supports' => array('title','editor','author','excerpt','comments', 'post-formats'),
    'taxonomies' => array('category', 'post_tag') // this is IMPORTANT
    ));

} ?>