
import React from 'react';

const Header = () => {
  return (
    <header className="bg-white shadow-sm">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex justify-between items-center py-4">
          <div className="flex items-center">
            <img 
              src="/lovable-uploads/e353d0fe-4db1-4fe6-843f-e67cf0e3ce95.png" 
              alt="Galt Seguros" 
              className="h-12 w-auto"
            />
          </div>
          <nav className="hidden md:flex space-x-8">
            <a href="#quem-somos" className="text-gray-700 hover:text-blue-600 transition-colors">Quem Somos</a>
            <a href="#seguros" className="text-gray-700 hover:text-blue-600 transition-colors">Seguros</a>
            <a href="#depoimentos" className="text-gray-700 hover:text-blue-600 transition-colors">Depoimentos</a>
            <a href="#faq" className="text-gray-700 hover:text-blue-600 transition-colors">FAQ</a>
            <a href="#contato" className="text-gray-700 hover:text-blue-600 transition-colors">Contato</a>
          </nav>
        </div>
      </div>
    </header>
  );
};

export default Header;
