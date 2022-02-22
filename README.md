# Desafio DevOps - Rubeus

## Introdução

<p>Nesta etapa do processo seletivo, o objetivo é conhecer um pouco mais de suas capacidades técnicas. Não se preocupe se você não conseguir executar todas as atividades, <strong>faça o máximo que conseguir</strong>, o importante é que você consiga apresentar suas qualidades técnicas (e também suas dificuldades, se houver) ao realizar o seu teste.</p>

<p>Você terá uma semana para realizar este teste, no caso de ocorrer algum imprevisto, comunique o quanto antes, preferencialmente com antecedência de até 2 (dois) dias. Caso não seja possível, isso não será considerado um ponto negativo na sua avaliação.</p>

<br>

## Requisitos iniciais

<p>1) Faça o Fork privado desse repositório para a sua conta GitHub e desenvolva seu teste nesse fork.</p>
    
<p>2) Criar uma conta no Google Cloud (https://cloud.google.com/) ou qualquer outro serviço de infraestrutura em nuvem de sua preferência, em que seja possível instanciar uma máquina virtual</p>

<p>3) Criar uma conta no mLab (https://mlab.com/). Essa é uma sugestão, você pode ficar a vontade para utilizar um MongoDB em outro local, seja serviço ou VM.</p>

<p>4) Crie uma instância no serviço de infraestrutura que você escolheu no passo 2.</p>

<p>5) Instale as dependências necessárias do projeto solicitado, e faça o deploy do mesmo a partir do seu repositório criado.</p>

<br>

## Iniciando a aplicação

<p>Essa é uma aplicação em Laravel v8.57, e para executá-la você vai precisar do PHP 7.4 ou superior e o Composer.</p>

<p>Comece configurando o seu .env, copie o arquivo .env-example para .env e altere as variáveis de ambiente da aplicação, com relação ao banco, segue um exemplo de conexão:</p>

    DB_CONNECTION=mongodb
    DB_HOST=172.27.0.44
    DB_PORT=27017
    DB_DATABASE=devops_test
    DB_USERNAME=root
    DB_PASSWORD=example

<p>Para instalar as dependências do projeto, execute o composer a partir da raiz do projeto.</p>

    composer install

<p>Estando as dependências devidamente instaladas e o .env devidamente configurado, inicie a aplicação com o comando</p>

    php artisan serve

<br>

## Atividade 1

<p>O objetivo principal é criar um processo de deploy para atualizações automatizadas da aplicação. Sinta-se livre para definir o processo e as ferramentas (por exemplo: GitHub Actions, CircleCi, Jenkins, etc..) necessárias para o CI/CD.</p>

<p>O objetivo secundário é executar a aplicação no ambiente em nuvem utilizando containers.</p>

<p>São requisitos relacionados:</p>
    
* Manter somente as portas 80, 443 e 22 abertas na máquina configurada;</p>
    
* Utilizar nginx ou apache para servir a aplicação (não é necessário configurar um domínio ou certificado SSL).

<br>

## Atividade 2

<p>O objetivo desse segundo desafio é implementar alguma nova funcionalidade na aplicação base, sinta-se livre para escolher o que e como implementar. Não se preocupe em realizar algo muito elaborado ou complexo, por exemplo, criar uma nova rota que exiba um "Don't panic" já é válido. O importante é que após a nova funcionalidade, você valide o deploy automatizado.</p>

<br>

## Importante!

<p>Mantenha todo o histórico de commits no seu repositório, não se preocupe com padrões nas escritas destes commits, utilize o que se sentir mais à vontade.</p>

<br>

## Finalizando o teste

<p>Você deverá enviar um email para <mailto:talentos@rubeus.com.br>talentos@rubeus.com.br</mailto> ao finalizar o teste ou até o prazo especificado. Utilize `Teste prático Devops` como assunto do email, cujo conteúdo do email pode ser apenas o link de seu repositório no GitHub deste teste. Se preferir, aproveite o email para realizar as considerações pertinentes a respeito do desenvolvimento do seu teste.</p>

<p>Conforme combinado, será agendada uma reunião para avaliação do teste e resposta de eventuais dúvidas dos envolvidos, portanto, esteja com todo seu ambiente preparado para execução e validação para evitar quaisquer atrasos ou imprevistos durante a reunião.</p>

<br>
 
Bom trabalho!
