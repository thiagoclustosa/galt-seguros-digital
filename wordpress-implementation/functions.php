
<?php
// Suporte a recursos do tema
function galt_seguros_setup() {
    // Suporte a título dinâmico
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a logo customizada
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'galt_seguros_setup');

// Carregar estilos e scripts
function galt_seguros_scripts() {
    // CSS principal
    wp_enqueue_style('galt-seguros-style', get_stylesheet_uri(), array(), '1.0');
    
    // JavaScript principal
    wp_enqueue_script('galt-seguros-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'galt_seguros_scripts');

// Adicionar opções no Customizador
function galt_seguros_customize_register($wp_customize) {
    // Seção para logo
    $wp_customize->add_section('galt_logo_section', array(
        'title'    => 'Logo da Empresa',
        'priority' => 30,
    ));
    
    // Campo para URL da logo
    $wp_customize->add_setting('galt_logo', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'galt_logo', array(
        'label'    => 'Logo da Galt Seguros',
        'section'  => 'galt_logo_section',
        'settings' => 'galt_logo',
    )));
}
add_action('customize_register', 'galt_seguros_customize_register');

// Remover algumas funcionalidades desnecessárias
remove_action('wp_head', 'wp_generator');
