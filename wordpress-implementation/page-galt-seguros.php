
<?php
/*
Template Name: Galt Seguros Landing Page
*/

get_header(); ?>

<style>
/* Importar Tailwind CSS */
@import url('https://cdn.tailwindcss.com');

/* Estilos personalizados */
.bg-gradient-galt {
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
}

.form-container {
    background: white;
    border-radius: 12px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    padding: 2rem;
    margin: 0 auto;
    max-width: 600px;
}

.section-divider {
    width: 6rem;
    height: 4px;
    background-color: #2563eb;
    margin: 0 auto 2rem;
}

.partner-logo {
    filter: grayscale(100%);
    transition: all 0.3s ease;
    max-height: 4rem;
    width: auto;
}

.partner-logo:hover {
    filter: grayscale(0%);
}

.service-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
}

.service-card:hover {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    transform: translateY(-2px);
}

.testimonial-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    padding: 2rem;
}

.faq-item {
    background: white;
    border: 1px solid #e5e7eb;
    border-radius: 8px;
    margin-bottom: 1rem;
}

.faq-question {
    width: 100%;
    padding: 1.5rem;
    text-align: left;
    background: none;
    border: none;
    font-weight: 600;
    font-size: 1.125rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-answer {
    padding: 0 1.5rem 1.5rem;
    color: #6b7280;
    display: none;
}

.faq-answer.active {
    display: block;
}

@media (max-width: 768px) {
    .container {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}
</style>

<div class="min-h-screen bg-white">
    <!-- Header Section with Quote Form -->
    <section class="bg-gradient-galt text-white py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Solicite sua cotação agora!</h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                    Encontre o seguro ideal para você com as melhores condições do mercado
                </p>
            </div>

            <div class="form-container">
                <form id="quote-form" class="space-y-6">
                    <div>
                        <label for="insurance_type" class="block text-sm font-medium text-gray-700 mb-2">
                            Tipo de Seguro
                        </label>
                        <select id="insurance_type" name="insurance_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900">
                            <option value="">Selecione o tipo de seguro</option>
                            <option value="vida">Seguro de Vida</option>
                            <option value="rc">Seguro de Responsabilidade Civil</option>
                            <option value="auto">Seguro Automotivo</option>
                            <option value="residencial">Seguro Residencial</option>
                            <option value="empresarial">Seguro Empresarial</option>
                        </select>
                    </div>

                    <div id="dynamic-fields"></div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Solicitar Cotação
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="quem-somos" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Quem Somos</h2>
                <div class="section-divider"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="flex items-center mb-6">
                        <div class="text-4xl mr-4">🛡️</div>
                        <h3 class="text-2xl font-semibold text-gray-900">Confiança e Experiência</h3>
                    </div>
                    <p class="text-lg text-gray-600 mb-6">
                        A Galt Seguros é uma corretora confiável que se dedica a oferecer soluções personalizadas 
                        em seguros para pessoas físicas e jurídicas. Com anos de experiência no mercado, trabalhamos 
                        com as maiores e mais respeitadas seguradoras do Brasil.
                    </p>
                    <p class="text-lg text-gray-600 mb-6">
                        Nossa missão é proteger o que mais importa para você, oferecendo atendimento especializado 
                        e produtos que realmente atendem às suas necessidades específicas.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">+1000</div>
                            <div class="text-gray-600">Clientes Atendidos</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">+10</div>
                            <div class="text-gray-600">Seguradoras Parceiras</div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="bg-blue-100 p-8 rounded-full inline-block">
                        <div class="text-6xl">🏢</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
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
                <div class="flex items-center justify-center p-4 bg-white rounded-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600 mb-2">Porto</div>
                        <div class="text-sm text-gray-600">Seguro</div>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600 mb-2">Allianz</div>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600 mb-2">HDI</div>
                        <div class="text-sm text-gray-600">Seguros</div>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600 mb-2">Bradesco</div>
                        <div class="text-sm text-gray-600">Seguros</div>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600 mb-2">MAPFRE</div>
                    </div>
                </div>
                <div class="flex items-center justify-center p-4 bg-white rounded-lg">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-blue-600 mb-2">Tokio</div>
                        <div class="text-sm text-gray-600">Marine</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="seguros" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Tipos de Seguro</h2>
                <div class="section-divider"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Oferecemos uma ampla gama de produtos de seguro para atender todas as suas necessidades 
                    de proteção, seja pessoal, familiar ou empresarial.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card">
                    <div class="text-4xl mb-4">🛡️</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Seguro de Vida</h3>
                    <p class="text-gray-600">Proteja sua família e garanta segurança financeira em momentos difíceis.</p>
                </div>
                <div class="service-card">
                    <div class="text-4xl mb-4">🏠</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Seguro Residencial</h3>
                    <p class="text-gray-600">Proteção completa para sua casa ou apartamento contra diversos riscos.</p>
                </div>
                <div class="service-card">
                    <div class="text-4xl mb-4">👥</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Seguro Empresarial</h3>
                    <p class="text-gray-600">Soluções corporativas para proteger seu negócio e seus funcionários.</p>
                </div>
                <div class="service-card">
                    <div class="text-4xl mb-4">🚗</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Seguro Automotivo</h3>
                    <p class="text-gray-600">Cobertura completa para seu veículo com assistência 24 horas.</p>
                </div>
                <div class="service-card">
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">RC Profissional</h3>
                    <p class="text-gray-600">Responsabilidade civil para médicos, engenheiros e outros profissionais.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="depoimentos" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Depoimentos de Clientes</h2>
                <div class="section-divider"></div>
                <p class="text-lg text-gray-600">
                    Veja o que nossos clientes falam sobre nossos serviços e atendimento.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="testimonial-card">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Excelente atendimento! A equipe da Galt me ajudou a encontrar o seguro empresarial perfeito para minha empresa. Recomendo muito!"</p>
                    <div class="border-t pt-4">
                        <p class="font-semibold text-gray-900">Maria Silva</p>
                        <p class="text-sm text-gray-500">Empresária</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Profissionais muito competentes. Conseguiram uma excelente cobertura de responsabilidade civil para minha clínica com um preço justo."</p>
                    <div class="border-t pt-4">
                        <p class="font-semibold text-gray-900">Dr. João Santos</p>
                        <p class="text-sm text-gray-500">Médico</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Atendimento personalizado e ágil. Senti total confiança desde o primeiro contato. Meu seguro residencial ficou muito bem ajustado às minhas necessidades."</p>
                    <div class="border-t pt-4">
                        <p class="font-semibold text-gray-900">Ana Costa</p>
                        <p class="text-sm text-gray-500">Arquiteta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Perguntas Frequentes</h2>
                <div class="section-divider"></div>
                <p class="text-lg text-gray-600">
                    Tire suas dúvidas sobre nossos produtos e serviços.
                </p>
            </div>

            <div class="space-y-4">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Por que contratar um seguro de vida?</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>O seguro de vida é uma proteção financeira para sua família em caso de imprevistos. Garante que seus entes queridos tenham segurança financeira para manter o padrão de vida e quitar dívidas pendentes.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Como funciona a cobertura de responsabilidade civil para médicos e engenheiros?</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>A cobertura de RC Profissional protege contra danos causados a terceiros no exercício da profissão. Inclui defesa judicial, indenizações e custos processuais decorrentes de erros ou omissões profissionais.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Posso contratar um seguro mesmo sendo inquilino?</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Sim! O seguro residencial para inquilinos protege seus bens pessoais, oferece cobertura para danos causados ao imóvel locado e inclui responsabilidade civil familiar.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Quais documentos preciso para fazer uma cotação?</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Os documentos variam conforme o tipo de seguro. Geralmente são necessários: CPF, RG, comprovante de endereço e documentos específicos do bem a ser segurado (CRLV para veículos, escritura para imóveis, etc.).</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Quais são as formas de pagamento disponíveis?</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Oferecemos diversas formas de pagamento: à vista com desconto, parcelamento no cartão de crédito, débito em conta bancária e boleto bancário com parcelamento em até 12x.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>Como é feito o atendimento em caso de sinistro?</span>
                        <span class="text-blue-600 text-xl">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Oferecemos suporte completo durante todo o processo. Nossa equipe auxilia desde a abertura do sinistro até a conclusão, intermediando o contato com a seguradora e acompanhando cada etapa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contato" class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">Galt Seguros</h3>
                    <p class="text-gray-300 mb-4">
                        Sua proteção é nossa prioridade. Oferecemos soluções personalizadas 
                        em seguros com atendimento especializado.
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Contato</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <span class="mr-3">📞</span>
                            <span class="text-gray-300">(11) 9999-9999</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-3">✉️</span>
                            <span class="text-gray-300">contato@galtseguros.com.br</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4">Links Úteis</h3>
                    <div class="space-y-2">
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">WhatsApp</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Facebook</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Instagram</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Política de Privacidade</a>
                        <a href="#" class="block text-gray-300 hover:text-white transition-colors">Termos de Uso</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    © <?php echo date('Y'); ?> Galt Seguros - Corretora de Seguros. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
</div>

<script>
// Formulário dinâmico
const insuranceFields = {
    vida: [
        { id: 'nome', label: 'Nome completo', type: 'text', placeholder: 'Seu nome completo' },
        { id: 'cpf', label: 'CPF', type: 'text', placeholder: '000.000.000-00' },
        { id: 'telefone', label: 'Telefone', type: 'text', placeholder: '(11) 99999-9999' },
        { id: 'email', label: 'E-mail', type: 'email', placeholder: 'seu@email.com' },
        { id: 'profissao', label: 'Profissão', type: 'text', placeholder: 'Sua profissão' },
        { id: 'renda', label: 'Renda mensal aproximada', type: 'text', placeholder: 'R$ 0,00' }
    ],
    rc: [
        { id: 'nome', label: 'Nome completo', type: 'text', placeholder: 'Seu nome completo' },
        { id: 'cpf', label: 'CPF', type: 'text', placeholder: '000.000.000-00' },
        { id: 'profissao', label: 'Profissão / Área de atuação', type: 'text', placeholder: 'Sua profissão' },
        { id: 'cnpj', label: 'CNPJ (se tiver)', type: 'text', placeholder: '00.000.000/0000-00' },
        { id: 'especialidade', label: 'Especialidade', type: 'text', placeholder: 'Para médicos ou engenheiros' },
        { id: 'telefone', label: 'Telefone', type: 'text', placeholder: '(11) 99999-9999' },
        { id: 'email', label: 'E-mail', type: 'email', placeholder: 'seu@email.com' }
    ],
    auto: [
        { id: 'nome', label: 'Nome completo', type: 'text', placeholder: 'Seu nome completo' },
        { id: 'cpf', label: 'CPF', type: 'text', placeholder: '000.000.000-00' },
        { id: 'telefone', label: 'Telefone', type: 'text', placeholder: '(11) 99999-9999' },
        { id: 'email', label: 'E-mail', type: 'email', placeholder: 'seu@email.com' },
        { id: 'placa', label: 'Placa do veículo', type: 'text', placeholder: 'ABC-1234' },
        { id: 'modelo', label: 'Modelo, ano e versão', type: 'text', placeholder: 'Ex: Honda Civic 2020 EXL' },
        { id: 'cep', label: 'CEP de pernoite', type: 'text', placeholder: '00000-000' }
    ],
    residencial: [
        { id: 'nome', label: 'Nome completo', type: 'text', placeholder: 'Seu nome completo' },
        { id: 'cpf', label: 'CPF', type: 'text', placeholder: '000.000.000-00' },
        { id: 'email', label: 'E-mail', type: 'email', placeholder: 'seu@email.com' },
        { id: 'telefone', label: 'Telefone', type: 'text', placeholder: '(11) 99999-9999' },
        { id: 'endereco', label: 'Endereço do imóvel', type: 'text', placeholder: 'Endereço completo' },
        { id: 'tipo', label: 'Tipo de imóvel', type: 'select', options: ['casa', 'apartamento'] },
        { id: 'valor', label: 'Valor aproximado do imóvel', type: 'text', placeholder: 'R$ 0,00' },
        { id: 'situacao', label: 'Situação', type: 'select', options: ['proprietario', 'inquilino'] }
    ],
    empresarial: [
        { id: 'empresa', label: 'Nome da empresa', type: 'text', placeholder: 'Nome da empresa' },
        { id: 'cnpj', label: 'CNPJ', type: 'text', placeholder: '00.000.000/0000-00' },
        { id: 'ramo', label: 'Ramo de atividade', type: 'text', placeholder: 'Área de atuação' },
        { id: 'funcionarios', label: 'Quantidade de funcionários', type: 'text', placeholder: 'Número de funcionários' },
        { id: 'cobertura', label: 'Valor aproximado de cobertura', type: 'text', placeholder: 'R$ 0,00' },
        { id: 'endereco', label: 'Endereço', type: 'text', placeholder: 'Endereço da empresa' },
        { id: 'responsavel', label: 'Nome do responsável', type: 'text', placeholder: 'Nome do responsável' }
    ]
};

document.getElementById('insurance_type').addEventListener('change', function() {
    const selectedType = this.value;
    const dynamicFields = document.getElementById('dynamic-fields');
    dynamicFields.innerHTML = '';

    if (selectedType && insuranceFields[selectedType]) {
        insuranceFields[selectedType].forEach(field => {
            let fieldHtml = `
                <div>
                    <label for="${field.id}" class="block text-sm font-medium text-gray-700 mb-2">
                        ${field.label}
                    </label>
            `;

            if (field.type === 'select') {
                fieldHtml += `<select id="${field.id}" name="${field.id}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900">`;
                fieldHtml += `<option value="">Selecione...</option>`;
                field.options.forEach(option => {
                    const label = option === 'proprietario' ? 'Proprietário' : 
                                 option === 'inquilino' ? 'Inquilino' : 
                                 option.charAt(0).toUpperCase() + option.slice(1);
                    fieldHtml += `<option value="${option}">${label}</option>`;
                });
                fieldHtml += `</select>`;
            } else {
                fieldHtml += `<input type="${field.type}" id="${field.id}" name="${field.id}" placeholder="${field.placeholder}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-gray-900" required>`;
            }

            fieldHtml += `</div>`;
            dynamicFields.innerHTML += fieldHtml;
        });
    }
});

// Envio do formulário
document.getElementById('quote-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = {};
    for (let [key, value] of formData.entries()) {
        data[key] = value;
    }
    
    // Aqui você pode enviar os dados via AJAX para o backend
    console.log('Dados do formulário:', data);
    alert('Cotação enviada com sucesso! Entraremos em contato em breve.');
    
    // Limpar formulário
    this.reset();
    document.getElementById('dynamic-fields').innerHTML = '';
});

// FAQ toggle
function toggleFaq(button) {
    const answer = button.nextElementSibling;
    const icon = button.querySelector('span:last-child');
    
    if (answer.classList.contains('active')) {
        answer.classList.remove('active');
        icon.textContent = '+';
    } else {
        // Fechar todas as outras respostas
        document.querySelectorAll('.faq-answer').forEach(ans => {
            ans.classList.remove('active');
        });
        document.querySelectorAll('.faq-question span:last-child').forEach(ic => {
            ic.textContent = '+';
        });
        
        // Abrir a resposta atual
        answer.classList.add('active');
        icon.textContent = '−';
    }
}

// Smooth scroll para links internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php get_footer(); ?>
