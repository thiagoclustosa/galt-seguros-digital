
import React from 'react';
import { Phone, Mail } from 'lucide-react';

const Footer = () => {
  return (
    <footer id="contato" className="bg-gray-900 text-white py-12">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <img 
              src="/lovable-uploads/cd53c2d8-b144-469c-92be-6662bd772377.png" 
              alt="Galt Seguros" 
              className="h-16 w-auto mb-4"
            />
            <p className="text-gray-300 mb-4">
              Sua proteção é nossa prioridade. Oferecemos soluções personalizadas 
              em seguros com atendimento especializado.
            </p>
          </div>

          <div>
            <h3 className="text-lg font-semibold mb-4">Contato</h3>
            <div className="space-y-3">
              <div className="flex items-center">
                <Phone className="h-5 w-5 mr-3 text-blue-400" />
                <span className="text-gray-300">(11) 9999-9999</span>
              </div>
              <div className="flex items-center">
                <Mail className="h-5 w-5 mr-3 text-blue-400" />
                <span className="text-gray-300">contato@galtseguros.com.br</span>
              </div>
            </div>
          </div>

          <div>
            <h3 className="text-lg font-semibold mb-4">Links Úteis</h3>
            <div className="space-y-2">
              <a href="#" className="block text-gray-300 hover:text-white transition-colors">WhatsApp</a>
              <a href="#" className="block text-gray-300 hover:text-white transition-colors">Facebook</a>
              <a href="#" className="block text-gray-300 hover:text-white transition-colors">Instagram</a>
              <a href="#" className="block text-gray-300 hover:text-white transition-colors">Política de Privacidade</a>
              <a href="#" className="block text-gray-300 hover:text-white transition-colors">Termos de Uso</a>
            </div>
          </div>
        </div>

        <div className="border-t border-gray-800 mt-8 pt-8 text-center">
          <p className="text-gray-400">
            © 2024 Galt Seguros - Corretora de Seguros. Todos os direitos reservados.
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
