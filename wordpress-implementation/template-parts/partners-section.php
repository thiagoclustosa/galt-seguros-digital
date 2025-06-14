
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
            // Array com as seguradoras - SUBSTITUA AS URLs pelas URLs reais das suas imagens
            $partners = array(
                array('name' => 'Porto Seguro', 'logo' => 'URL_DA_IMAGEM_PORTO_SEGURO'),
                array('name' => 'Allianz', 'logo' => 'URL_DA_IMAGEM_ALLIANZ'),
                array('name' => 'HDI Seguros', 'logo' => 'URL_DA_IMAGEM_HDI'),
                array('name' => 'Bradesco Seguros', 'logo' => 'URL_DA_IMAGEM_BRADESCO'),
                array('name' => 'MAPFRE', 'logo' => 'URL_DA_IMAGEM_MAPFRE'),
                array('name' => 'Tokio Marine', 'logo' => 'URL_DA_IMAGEM_TOKIO')
            );

            foreach ($partners as $partner) : ?>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                    <?php if ($partner['logo'] !== 'URL_DA_IMAGEM_' . strtoupper(str_replace(' ', '_', $partner['name']))) : ?>
                        <img
                            src="<?php echo esc_url($partner['logo']); ?>"
                            alt="<?php echo esc_attr($partner['name']); ?>"
                            class="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300"
                        />
                    <?php else : ?>
                        <!-- Fallback caso não tenha imagem -->
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
