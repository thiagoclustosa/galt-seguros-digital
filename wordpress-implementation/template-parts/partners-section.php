
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Seguradoras Parceiras</h2>
            <div class="section-divider"></div>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Trabalhamos com as principais seguradoras do mercado brasileiro para oferecer 
                as melhores opções e condições para nossos clientes.
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
            <?php
            // Array com as seguradoras e suas URLs reais
            $partners = array(
                array(
                    'name' => 'Porto Seguro',
                    'logo' => 'https://galtcorretoradeseguros.com.br/wp-content/uploads/2025/06/Nova-Logo_PortoHolding-scaled.webp'
                ),
                array(
                    'name' => 'HDI Seguros',
                    'logo' => 'https://galtcorretoradeseguros.com.br/wp-content/uploads/2025/06/logo-hdi-seguros-scaled.png'
                ),
                array(
                    'name' => 'MAPFRE',
                    'logo' => 'https://galtcorretoradeseguros.com.br/wp-content/uploads/2025/06/LOGO-MAPFRE.jpg'
                ),
                array(
                    'name' => 'Tokio Marine',
                    'logo' => 'https://galtcorretoradeseguros.com.br/wp-content/uploads/2025/06/logo-tokio-marine.png'
                ),
                array(
                    'name' => 'Allianz',
                    'logo' => '' // Placeholder para quando você tiver a imagem
                ),
                array(
                    'name' => 'Bradesco Seguros',
                    'logo' => '' // Placeholder para quando você tiver a imagem
                )
            );

            foreach ($partners as $partner) : ?>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <?php if (!empty($partner['logo'])) : ?>
                        <img
                            src="<?php echo esc_url($partner['logo']); ?>"
                            alt="<?php echo esc_attr($partner['name']); ?>"
                            class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300"
                        />
                    <?php else : ?>
                        <!-- Fallback para seguradoras sem imagem -->
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2">
                                <?php echo esc_html(explode(' ', $partner['name'])[0]); ?>
                            </div>
                            <?php if (strpos($partner['name'], ' ') !== false) : ?>
                                <div class="text-sm text-gray-600">
                                    <?php echo esc_html(substr($partner['name'], strpos($partner['name'], ' ') + 1)); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
