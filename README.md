Esse repositório contém todos os testes automatizados para validação automatizada dos exercícios de PHP do Mestre dos códigos.

## Executando as validações

### TL;DR

### Executando localmente as valições

Primeiro crie a imagem com o exercício desejado na raiz do projeto, substintuindo `IMAGE_NAME` por um nome de sua escolha: `docker build -t IMAGE_NAME -f docker-build/Dockerfile .`

Na sequência, acesse a pasta to projeto que possui o arquivo `index.php` e execute (lembre-se de substituir `IMAGE_NAME` pelo nome escolhido na etapa anterior:
`docker run --rm -v $(pwd)/public:/opt/project -it IMAGE_NAME`

## Estrutura do projeto

O projeto é separado em duas partes:

### Arquivos de configuração do projeto PHP
A pasta `docker-build` possui os arquivos de configuração do docker e de execução dos testes.
Aqui ficam os arquivos que são comuns de todas as imagens.

### Testes de validação
A pasta `test` contém diversas pastas onde cada uma possui os testes associados com a resolução do problema referido.
Cada pasta será copiada em sua própria imagem, dividindo espaços com os arquivos e pastas relacionadas com a configuração e execução dos testes.
O padrão de nomenclatura das imagens do Docker é que a imagem tenha mesmo nome do exercício (para facilitar a automação).

## Como criar a imagem do Docker de resolução

### Buildando sua própria imagem

### Padrão de criação das imagens do docker
