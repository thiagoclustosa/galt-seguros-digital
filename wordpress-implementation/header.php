
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Configuração do Tailwind -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'blue': {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a'
                        }
                    }
                }
            }
        }
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-blue-600">
                    <a href="<?php echo home_url(); ?>" class="text-blue-600 no-underline">Galt Seguros</a>
                </h1>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="#quem-somos" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 no-underline">Quem Somos</a>
                <a href="#seguros" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 no-underline">Seguros</a>
                <a href="#depoimentos" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 no-underline">Depoimentos</a>
                <a href="#faq" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 no-underline">FAQ</a>
                <a href="#contato" class="text-gray-600 hover:text-blue-600 transition-colors duration-200 no-underline">Contato</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <a href="tel:(11)99999-9999" class="text-blue-600 font-semibold no-underline">(11) 9999-9999</a>
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 no-underline">WhatsApp</a>
            </div>
        </div>
    </div>
</header>
