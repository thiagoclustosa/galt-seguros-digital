
import React from 'react';
import { Card, CardContent } from "@/components/ui/card";
import { Star } from 'lucide-react';

const TestimonialsSection = () => {
  const testimonials = [
    {
      name: "Maria Silva",
      role: "Empresária",
      content: "Excelente atendimento! A equipe da Galt me ajudou a encontrar o seguro empresarial perfeito para minha empresa. Recomendo muito!",
      rating: 5
    },
    {
      name: "Dr. João Santos",
      role: "Médico",
      content: "Profissionais muito competentes. Conseguiram uma excelente cobertura de responsabilidade civil para minha clínica com um preço justo.",
      rating: 5
    },
    {
      name: "Ana Costa",
      role: "Arquiteta",
      content: "Atendimento personalizado e ágil. Senti total confiança desde o primeiro contato. Meu seguro residencial ficou muito bem ajustado às minhas necessidades.",
      rating: 5
    }
  ];

  return (
    <section id="depoimentos" className="py-16 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-12">
          <h2 className="text-3xl font-bold text-gray-900 mb-4">Depoimentos de Clientes</h2>
          <div className="w-24 h-1 bg-blue-600 mx-auto mb-8"></div>
          <p className="text-lg text-gray-600 max-w-3xl mx-auto">
            Veja o que nossos clientes falam sobre nossos serviços e atendimento.
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {testimonials.map((testimonial, index) => (
            <Card key={index} className="border-0 shadow-lg hover:shadow-xl transition-shadow duration-300">
              <CardContent className="p-6">
                <div className="flex mb-4">
                  {[...Array(testimonial.rating)].map((_, i) => (
                    <Star key={i} className="h-5 w-5 text-yellow-400 fill-current" />
                  ))}
                </div>
                <p className="text-gray-600 mb-6 italic">"{testimonial.content}"</p>
                <div className="border-t pt-4">
                  <p className="font-semibold text-gray-900">{testimonial.name}</p>
                  <p className="text-sm text-gray-500">{testimonial.role}</p>
                </div>
              </CardContent>
            </Card>
          ))}
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;
