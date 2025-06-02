
import React from 'react';
import { Collapsible, CollapsibleContent, CollapsibleTrigger } from "@/components/ui/collapsible";
import { Card, CardContent } from "@/components/ui/card";

const FAQSection = () => {
  const faqs = [
    {
      question: "Por que contratar um seguro de vida?",
      answer: "O seguro de vida é uma proteção financeira para sua família em caso de imprevistos. Garante que seus entes queridos tenham segurança financeira para manter o padrão de vida e quitar dívidas pendentes."
    },
    {
      question: "Como funciona a cobertura de responsabilidade civil para médicos e engenheiros?",
      answer: "A cobertura de RC Profissional protege contra danos causados a terceiros no exercício da profissão. Inclui defesa judicial, indenizações e custos processuais decorrentes de erros ou omissões profissionais."
    },
    {
      question: "Posso contratar um seguro mesmo sendo inquilino?",
      answer: "Sim! O seguro residencial para inquilinos protege seus bens pessoais, oferece cobertura para danos causados ao imóvel locado e inclui responsabilidade civil familiar."
    },
    {
      question: "Quais documentos preciso para fazer uma cotação?",
      answer: "Os documentos variam conforme o tipo de seguro. Geralmente são necessários: CPF, RG, comprovante de endereço e documentos específicos do bem a ser segurado (CRLV para veículos, escritura para imóveis, etc.)."
    },
    {
      question: "Quais são as formas de pagamento disponíveis?",
      answer: "Oferecemos diversas formas de pagamento: à vista com desconto, parcelamento no cartão de crédito, débito em conta bancária e boleto bancário com parcelamento em até 12x."
    },
    {
      question: "Como é feito o atendimento em caso de sinistro?",
      answer: "Oferecemos suporte completo durante todo o processo. Nossa equipe auxilia desde a abertura do sinistro até a conclusão, intermediando o contato com a seguradora e acompanhando cada etapa."
    }
  ];

  return (
    <section id="faq" className="py-16 bg-white">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Perguntas Frequentes</h2>
          <div className="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
          <p className="text-lg text-gray-600">
            Tire suas dúvidas sobre nossos produtos e serviços.
          </p>
        </div>

        <div className="space-y-4">
          {faqs.map((faq, index) => (
            <Card key={index} className="border border-gray-200">
              <Collapsible>
                <CollapsibleTrigger className="w-full p-6 text-left hover:bg-gray-50 transition-colors">
                  <div className="flex justify-between items-center">
                    <h3 className="text-lg font-semibold text-gray-900 pr-4">{faq.question}</h3>
                    <span className="text-blue-600 text-xl">+</span>
                  </div>
                </CollapsibleTrigger>
                <CollapsibleContent>
                  <CardContent className="pt-0 pb-6">
                    <p className="text-gray-600">{faq.answer}</p>
                  </CardContent>
                </CollapsibleContent>
              </Collapsible>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default FAQSection;
