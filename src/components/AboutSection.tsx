
import React from 'react';
import { Shield } from 'lucide-react';

const AboutSection = () => {
  return (
    <section id="quem-somos" className="py-16 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Quem Somos</h2>
          <div className="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <div className="flex items-center mb-6">
              <Shield className="h-12 w-12 text-blue-600 mr-4" />
              <h3 className="text-2xl font-semibold text-gray-900">Confiança e Experiência</h3>
            </div>
            <p className="text-lg text-gray-600 mb-6">
              A Galt Seguros é uma corretora confiável que se dedica a oferecer soluções personalizadas 
              em seguros para pessoas físicas e jurídicas. Com anos de experiência no mercado, trabalhamos 
              com as maiores e mais respeitadas seguradoras do Brasil.
            </p>
            <p className="text-lg text-gray-600 mb-6">
              Nossa missão é proteger o que mais importa para você, oferecendo atendimento especializado 
              e produtos que realmente atendem às suas necessidades específicas.
            </p>
            <div className="grid grid-cols-2 gap-6">
              <div className="text-center">
                <div className="text-3xl font-bold text-blue-600">+1000</div>
                <div className="text-gray-600">Clientes Atendidos</div>
              </div>
              <div className="text-center">
                <div className="text-3xl font-bold text-blue-600">+10</div>
                <div className="text-gray-600">Seguradoras Parceiras</div>
              </div>
            </div>
          </div>
          <div className="relative">
            <img 
              src="/lovable-uploads/cd53c2d8-b144-469c-92be-6662bd772377.png" 
              alt="Galt Seguros - Sua proteção é nossa prioridade" 
              className="w-full max-w-md mx-auto"
            />
          </div>
        </div>
      </div>
    </section>
  );
};

export default AboutSection;
