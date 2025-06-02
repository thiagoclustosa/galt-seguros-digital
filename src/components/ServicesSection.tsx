
import React from 'react';
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Shield, Home, Users, Car, FileText } from 'lucide-react';

const ServicesSection = () => {
  const services = [
    {
      icon: Shield,
      title: "Seguro de Vida",
      description: "Proteja sua família e garanta segurança financeira em momentos difíceis."
    },
    {
      icon: Home,
      title: "Seguro Residencial",
      description: "Proteção completa para sua casa ou apartamento contra diversos riscos."
    },
    {
      icon: Users,
      title: "Seguro Empresarial",
      description: "Soluções corporativas para proteger seu negócio e seus funcionários."
    },
    {
      icon: Car,
      title: "Seguro Automotivo",
      description: "Cobertura completa para seu veículo com assistência 24 horas."
    },
    {
      icon: FileText,
      title: "RC Profissional",
      description: "Responsabilidade civil para médicos, engenheiros e outros profissionais."
    }
  ];

  return (
    <section id="seguros" className="py-16 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Tipos de Seguro</h2>
          <div className="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Oferecemos uma ampla gama de produtos de seguro para atender todas as suas necessidades 
            de proteção, seja pessoal, familiar ou empresarial.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <Card key={index} className="hover:shadow-lg transition-shadow duration-300 border-0 shadow-md">
              <CardHeader className="text-center pb-4">
                <div className="mx-auto mb-4 p-3 bg-blue-100 rounded-full w-16 h-16 flex items-center justify-center">
                  <service.icon className="h-8 w-8 text-blue-600" />
                </div>
                <CardTitle className="text-xl text-gray-900">{service.title}</CardTitle>
              </CardHeader>
              <CardContent className="text-center">
                <p className="text-gray-600">{service.description}</p>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ServicesSection;
