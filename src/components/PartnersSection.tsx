
import React from 'react';

const PartnersSection = () => {
  const partners = [
    { name: "Porto Seguro", logo: "/lovable-uploads/38fb7a80-8b17-4208-a49e-c8385aa04dde.png" },
    { name: "Allianz", logo: "/lovable-uploads/24cd288b-1ef0-46aa-9c51-d95466a838e1.png" },
    { name: "HDI Seguros", logo: "/lovable-uploads/67765e0a-3cba-49a2-8532-2bfa28ebe8ab.png" },
    { name: "Bradesco Seguros", logo: "/lovable-uploads/f9300891-40e3-44ca-aa28-e6df915a3523.png" },
    { name: "MAPFRE", logo: "/lovable-uploads/859c182b-2ce0-47c5-9ae1-2465e928aeb1.png" },
    { name: "Tokio Marine", logo: "/lovable-uploads/cd2ff991-88b9-4bbb-ae71-3ce9721443ca.png" }
  ];

  return (
    <section className="py-16 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Seguradoras Parceiras</h2>
          <div className="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Trabalhamos com as principais seguradoras do mercado brasileiro para oferecer 
            as melhores opções e condições para nossos clientes.
          </p>
        </div>

        <div className="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 items-center">
          {partners.map((partner, index) => (
            <div key={index} className="flex items-center justify-center p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
              <img
                src={partner.logo}
                alt={partner.name}
                className="max-h-16 w-auto filter grayscale hover:grayscale-0 transition-all duration-300"
              />
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default PartnersSection;
