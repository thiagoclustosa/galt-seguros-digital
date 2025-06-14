
<?php
// Evitar acesso direto
if (!defined('ABSPATH')) {
    exit;
}

// Enqueue styles and scripts
function galt_seguros_enqueue_assets() {
    // CSS principal
    wp_enqueue_style(
        'galt-seguros-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
    
    // JavaScript principal
    wp_enqueue_script(
        'galt-seguros-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'galt_seguros_enqueue_assets');

// Suporte a recursos do tema
function galt_seguros_theme_support() {
    // Suporte a títulos dinâmicos
    add_theme_support('title-tag');
    
    // Suporte a imagens destacadas
    add_theme_support('post-thumbnails');
    
    // Suporte a menus
    add_theme_support('menus');
    
    // Suporte a HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'galt_seguros_theme_support');

// Registrar menus
function galt_seguros_register_menus() {
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'galt-seguros'),
        'footer' => __('Menu do Rodapé', 'galt-seguros'),
    ));
}
add_action('init', 'galt_seguros_register_menus');

// Processar formulário de cotação via AJAX
function handle_quote_form() {
    // Verificar nonce para segurança
    if (!wp_verify_nonce($_POST['nonce'], 'quote_form_nonce')) {
        wp_die('Erro de segurança');
    }
    
    // Processar dados do formulário
    $insurance_type = sanitize_text_field($_POST['insurance_type']);
    $form_data = array();
    
    // Coletar todos os campos do formulário
    foreach ($_POST as $key => $value) {
        if ($key !== 'action' && $key !== 'nonce') {
            $form_data[$key] = sanitize_text_field($value);
        }
    }
    
    // Aqui você pode:
    // 1. Salvar no banco de dados
    // 2. Enviar por email
    // 3. Integrar com CRM
    
    // Por enquanto, vamos apenas retornar sucesso
    wp_send_json_success(array(
        'message' => 'Cotação enviada com sucesso! Entraremos em contato em breve.',
        'data' => $form_data
    ));
}
add_action('wp_ajax_handle_quote_form', 'handle_quote_form');
add_action('wp_ajax_nopriv_handle_quote_form', 'handle_quote_form');

// Adicionar meta viewport para responsividade
function galt_seguros_viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}
add_action('wp_head', 'galt_seguros_viewport_meta');
?>
