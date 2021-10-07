# Avaliação Técnica - DevOps

## Introdução

<p>Nesta etapa do processo seletivo, o objetivo é conhecer um pouco mais de suas capacidades técnicas. Não se preocupe se você não conseguir executar todos os desafios, <strong>faça o máximo que conseguir</strong>, o importante é que você consiga apresentar suas qualidades técnicas (e também suas dificuldades, se houver) ao apresentar seu teste.</p>

<p>Você terá uma semana para realizar este teste. Se por algum imprevisto não puder apresentar o teste no dia combinado, comunique ao recrutador com antecedência de até 2 (dois) dias. Isso não será um problema, nem será um ponto negativo na sua avaliação.</p>

<br>

## Requisitos iniciais

<p>1) Faça o Fork desse repositório para a sua conta GitHub e desenvolva seu teste nesse fork. Mantenha o histórico de commits.</p>
    
<p>2) Criar uma conta no Google Cloud (https://cloud.google.com/) ou qualquer outro serviço de infraestrutura em nuvem de sua preferência, em que seja possível instanciar uma máquina virtual</p>

<p>3) Criar uma conta no mLab (https://mlab.com/)</p>

<p>4) Crie uma instância (ou máquina virtual) no serviço de infraestrutura que você escolheu no passo 2. No Google Cloud, vá em: Compute Engine > Instâncias da VM > Criar Instância</p>

<p>5) Acesse a instância por SSH, instale as dependências necessárias do projeto solicitado, e faça o deploy do mesmo a partir do seu repositório criado.</p>

<br>

## Desafio 1

<p>O Objetivo principal é criar um processo de deploy para atualizações automatizadas da aplicação. Sinta-se livre pra definir o processo e as ferramentas (por exemplo: GitHub actions, Circleci, Jenkins, etc..) necessárias para o CI/CD.</p>

<p>O Objetivo secundário é executar a aplicação utilizando Docker.</p>

<p>São requisitos/desafios relacionados:</p>
    
* Manter somente as portas 80, 443 e 22 abertas na máquina configurada;</p>
    
* Utilizar nginx ou apache para servir a aplicação (não é necessário configurar um domínio ou certificado SSL).

<br>

## Desafio 2

<p>O Objetivo desse segundo desafio é implementar alguma nova funcionalidade na aplicação base, sinta-se livre para escolher o que e como implementar. Não se preocupe em realizar algo muito elaborado ou complexo. O importante é que após a nova funcionalidade, você valide o deploy automatizado.</p>

<br>

## Importante!

<p>Mantenha todo o histórico de commits no seu repositório, não se preocupe com padrões nas escritas destes commits, utilize o que se sentir mais a vontade.</p>

## Finalizando o teste | Apresentação

<p>Você deverá enviar um email para <mailto:talentos@rubeus.com.br>talentos@rubeus.com.br</mailto> ao finalizar o teste ou até o prazo especificado. Utilize `Teste prático Devops - <Seu Nome>` como assunto do email, cujo conteúdo do email pode ser apenas o link de seu repositório no GitHub deste teste. Se preferir, aproveite o email para realizar as considerações pertinentes a respeito do desenvolvimento do seu teste.</p>

<p>Conforme conversa com o recrutador, será agendado uma reunião para que você possa apresentar sua avaliação. Tenha em mente que você terá 30 minutos para apresentar suas soluções, além de responder a aventuais dúvidas que os avaliadores tiverem com relação ao seu projeto no momento da apresentação.</p>

<p>Portanto, esteja com todo o seu ambiente preparado para execução e validação ao iniciar sua apresentação.</p>

<br>
 
Bom trabalho!
