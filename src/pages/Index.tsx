
import React from 'react';
import Header from '../components/Header';
import QuoteForm from '../components/QuoteForm';
import AboutSection from '../components/AboutSection';
import PartnersSection from '../components/PartnersSection';
import ServicesSection from '../components/ServicesSection';
import TestimonialsSection from '../components/TestimonialsSection';
import FAQSection from '../components/FAQSection';
import Footer from '../components/Footer';

const Index = () => {
  return (
    <div className="min-h-screen bg-white">
      <Header />
      <QuoteForm />
      <AboutSection />
      <PartnersSection />
      <ServicesSection />
      <TestimonialsSection />
      <FAQSection />
      <Footer />
    </div>
  );
};

export default Index;
