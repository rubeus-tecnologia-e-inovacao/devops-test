# Avaliação Técnica - DevOps

### Introdução

    Se você chegou nesse repositório é porque está participando do processo seletivo de Analista de DevOps da Rubeus e já passou por algumas etapas, então primeiramente nossos parabéns!
    
    Agora com relação a esta etapa do processo seletivo, o objetivo é conhecer um pouco mais de suas capacidades técnicas. Não se preocupe se você não conseguir executar todos os desafios, faça o máximo que conseguir, o importante é que você consiga apresentar suas qualidades técnicas (e também suas dificuldades, se houver) ao apresentar seu teste.

    Você terá uma semana para realizar este teste, se por algum motivo qualquer precisar de mais tempo, comunique ao recrutador com antecedência de até 1 (um) dia. Isso não será um problema, nem será um ponto negativo na sua avaliação.


### Requisitos iniciais

- 1) Criar uma conta no GitHub se ainda não possuir (https://github.com/)

- 2) Criar uma conta no Google Cloud (https://cloud.google.com/) ou qualquer outro serviço de infraestrutura em nuvem de sua preferência, em que seja possível instanciar uma máquina virtual

- 3) Criar uma conta no mLab (https://mlab.com/)

- 4) Crie um repositório no GitHub seguindo o padrão (rubeus-devops-<\seu nome>), faça o clone do projeto base deste teste <https://github.dev/rubeus-tecnologia-e-inovacao/devops_test> para o seu repositório

- 5) Crie uma instância (ou máquina virtual) no serviço de infraestrutura que você escolheu no passo 2. No Google Cloud, vá em: Compute Engine > Instâncias da VM > Criar Instância

- 6) Acesse a instância por SSH, instale as dependências necessárias do projeto solicitado, e faça o deploy do mesmo a partir do seu repositório criado.


### Desafio 1

    O Objetivo principal é criar um processo de deploy para atualizações automatizadas da aplicação. Sinta-se livre pra definir o processo e as ferramentas (por exemplo: GitHub actions, Circleci, Jenkins, etc..) necessárias para o CI/CD.

    O Objetivo secundário é executar a aplicação utilizando Docker.

    São requisitos/desafios relacionados:
        - Manter somente as portas 80, 443 e 22 abertas na máquina configurada;
        - Utilizar nginx ou apache para servir a aplicação (não é necessário configurar um domínio ou certificado SSL);


### Desafio 2

    O Objetivo desse segundo desafio é implementar alguma nova funcionalidade na aplicação base, sinta-se livre para escolher o que e como implementar. Não se preocupe em realizar algo muito elaborado ou complexo. O importante é que após a nova funcionalidade, você valide o deploy automatizado.


### Finalizando o teste | Apresentação

    Conforme conversa com o recrutador, será agendado um call para que você possa apresentar sua avaliação. Tenha em mente que você terá 30 minutos (com tolerância pertinente é claro) para apresentar suas soluções, além de responder a aventuais dúvidas que os avaliadores tiverem com relação ao seu projeto no momento da apresentação.

    Portanto, esteja com todo o seu ambiente preparado para execução e validação ao iniciar sua apresentação.


 
Bom trabalho!