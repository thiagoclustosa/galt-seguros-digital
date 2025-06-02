
import React, { useState } from 'react';
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { useToast } from "@/hooks/use-toast";

const QuoteForm = () => {
  const [selectedInsurance, setSelectedInsurance] = useState('');
  const [formData, setFormData] = useState({});
  const { toast } = useToast();

  const handleInputChange = (field: string, value: string) => {
    setFormData(prev => ({ ...prev, [field]: value }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    toast({
      title: "Cotação enviada!",
      description: "Entraremos em contato em breve.",
    });
  };

  const renderFormFields = () => {
    switch (selectedInsurance) {
      case 'vida':
        return (
          <>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <Label htmlFor="nome">Nome completo</Label>
                <Input id="nome" placeholder="Seu nome completo" onChange={(e) => handleInputChange('nome', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cpf">CPF</Label>
                <Input id="cpf" placeholder="000.000.000-00" onChange={(e) => handleInputChange('cpf', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="telefone">Telefone</Label>
                <Input id="telefone" placeholder="(11) 99999-9999" onChange={(e) => handleInputChange('telefone', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="email">E-mail</Label>
                <Input id="email" type="email" placeholder="seu@email.com" onChange={(e) => handleInputChange('email', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="profissao">Profissão</Label>
                <Input id="profissao" placeholder="Sua profissão" onChange={(e) => handleInputChange('profissao', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="renda">Renda mensal aproximada</Label>
                <Input id="renda" placeholder="R$ 0,00" onChange={(e) => handleInputChange('renda', e.target.value)} />
              </div>
            </div>
          </>
        );

      case 'rc':
        return (
          <>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <Label htmlFor="nome">Nome completo</Label>
                <Input id="nome" placeholder="Seu nome completo" onChange={(e) => handleInputChange('nome', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cpf">CPF</Label>
                <Input id="cpf" placeholder="000.000.000-00" onChange={(e) => handleInputChange('cpf', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="profissao">Profissão / Área de atuação</Label>
                <Input id="profissao" placeholder="Sua profissão" onChange={(e) => handleInputChange('profissao', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cnpj">CNPJ (se tiver)</Label>
                <Input id="cnpj" placeholder="00.000.000/0000-00" onChange={(e) => handleInputChange('cnpj', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="especialidade">Especialidade</Label>
                <Input id="especialidade" placeholder="Para médicos ou engenheiros" onChange={(e) => handleInputChange('especialidade', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="telefone">Telefone</Label>
                <Input id="telefone" placeholder="(11) 99999-9999" onChange={(e) => handleInputChange('telefone', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="email">E-mail</Label>
                <Input id="email" type="email" placeholder="seu@email.com" onChange={(e) => handleInputChange('email', e.target.value)} />
              </div>
            </div>
          </>
        );

      case 'auto':
        return (
          <>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <Label htmlFor="nome">Nome completo</Label>
                <Input id="nome" placeholder="Seu nome completo" onChange={(e) => handleInputChange('nome', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cpf">CPF</Label>
                <Input id="cpf" placeholder="000.000.000-00" onChange={(e) => handleInputChange('cpf', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="telefone">Telefone</Label>
                <Input id="telefone" placeholder="(11) 99999-9999" onChange={(e) => handleInputChange('telefone', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="email">E-mail</Label>
                <Input id="email" type="email" placeholder="seu@email.com" onChange={(e) => handleInputChange('email', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="placa">Placa do veículo</Label>
                <Input id="placa" placeholder="ABC-1234" onChange={(e) => handleInputChange('placa', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="modelo">Modelo, ano e versão</Label>
                <Input id="modelo" placeholder="Ex: Honda Civic 2020 EXL" onChange={(e) => handleInputChange('modelo', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cep">CEP de pernoite</Label>
                <Input id="cep" placeholder="00000-000" onChange={(e) => handleInputChange('cep', e.target.value)} />
              </div>
            </div>
          </>
        );

      case 'residencial':
        return (
          <>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <Label htmlFor="nome">Nome completo</Label>
                <Input id="nome" placeholder="Seu nome completo" onChange={(e) => handleInputChange('nome', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cpf">CPF</Label>
                <Input id="cpf" placeholder="000.000.000-00" onChange={(e) => handleInputChange('cpf', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="email">E-mail</Label>
                <Input id="email" type="email" placeholder="seu@email.com" onChange={(e) => handleInputChange('email', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="telefone">Telefone</Label>
                <Input id="telefone" placeholder="(11) 99999-9999" onChange={(e) => handleInputChange('telefone', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="endereco">Endereço do imóvel</Label>
                <Input id="endereco" placeholder="Endereço completo" onChange={(e) => handleInputChange('endereco', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="tipo">Tipo de imóvel</Label>
                <Select onValueChange={(value) => handleInputChange('tipo', value)}>
                  <SelectTrigger>
                    <SelectValue placeholder="Selecione o tipo" />
                  </SelectTrigger>
                  <SelectContent>
                    <SelectItem value="casa">Casa</SelectItem>
                    <SelectItem value="apartamento">Apartamento</SelectItem>
                  </SelectContent>
                </Select>
              </div>
              <div>
                <Label htmlFor="valor">Valor aproximado do imóvel</Label>
                <Input id="valor" placeholder="R$ 0,00" onChange={(e) => handleInputChange('valor', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="situacao">Situação</Label>
                <Select onValueChange={(value) => handleInputChange('situacao', value)}>
                  <SelectTrigger>
                    <SelectValue placeholder="Selecione" />
                  </SelectTrigger>
                  <SelectContent>
                    <SelectItem value="proprietario">Proprietário</SelectItem>
                    <SelectItem value="inquilino">Inquilino</SelectItem>
                  </SelectContent>
                </Select>
              </div>
            </div>
          </>
        );

      case 'empresarial':
        return (
          <>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <Label htmlFor="empresa">Nome da empresa</Label>
                <Input id="empresa" placeholder="Nome da empresa" onChange={(e) => handleInputChange('empresa', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cnpj">CNPJ</Label>
                <Input id="cnpj" placeholder="00.000.000/0000-00" onChange={(e) => handleInputChange('cnpj', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="ramo">Ramo de atividade</Label>
                <Input id="ramo" placeholder="Área de atuação" onChange={(e) => handleInputChange('ramo', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="funcionarios">Quantidade de funcionários</Label>
                <Input id="funcionarios" placeholder="Número de funcionários" onChange={(e) => handleInputChange('funcionarios', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="cobertura">Valor aproximado de cobertura</Label>
                <Input id="cobertura" placeholder="R$ 0,00" onChange={(e) => handleInputChange('cobertura', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="endereco">Endereço</Label>
                <Input id="endereco" placeholder="Endereço da empresa" onChange={(e) => handleInputChange('endereco', e.target.value)} />
              </div>
              <div>
                <Label htmlFor="responsavel">Nome do responsável</Label>
                <Input id="responsavel" placeholder="Nome do responsável" onChange={(e) => handleInputChange('responsavel', e.target.value)} />
              </div>
            </div>
          </>
        );

      default:
        return (
          <div className="text-center py-8">
            <p className="text-gray-600">Selecione o tipo de seguro para preencher o formulário</p>
          </div>
        );
    }
  };

  return (
    <section className="bg-gradient-to-br from-blue-50 to-blue-100 py-16">
      <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-8">
          <h1 className="text-4xl font-bold text-gray-900 mb-4">
            Solicite sua cotação agora!
          </h1>
          <p className="text-xl text-gray-600">
            Encontre o seguro ideal para você com as melhores condições do mercado
          </p>
        </div>

        <Card className="shadow-xl">
          <CardHeader>
            <CardTitle className="text-2xl text-center text-blue-700">
              Formulário de Cotação
            </CardTitle>
          </CardHeader>
          <CardContent>
            <form onSubmit={handleSubmit} className="space-y-6">
              <div>
                <Label htmlFor="tipo-seguro">Tipo de Seguro</Label>
                <Select onValueChange={setSelectedInsurance}>
                  <SelectTrigger>
                    <SelectValue placeholder="Selecione o tipo de seguro" />
                  </SelectTrigger>
                  <SelectContent>
                    <SelectItem value="vida">Seguro de Vida</SelectItem>
                    <SelectItem value="rc">Seguro de Responsabilidade Civil</SelectItem>
                    <SelectItem value="auto">Seguro Automotivo</SelectItem>
                    <SelectItem value="residencial">Seguro Residencial</SelectItem>
                    <SelectItem value="empresarial">Seguro Empresarial</SelectItem>
                  </SelectContent>
                </Select>
              </div>

              {renderFormFields()}

              {selectedInsurance && (
                <div className="text-center pt-4">
                  <Button type="submit" size="lg" className="bg-blue-600 hover:bg-blue-700 px-8">
                    Solicitar Cotação
                  </Button>
                </div>
              )}
            </form>
          </CardContent>
        </Card>
      </div>
    </section>
  );
};

export default QuoteForm;
