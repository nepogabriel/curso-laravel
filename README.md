<h1 align="center">
Série APP
</h1>

<h3 align="center">
Explorando o Framework Laravel através da ideia de um sistema de gerenciamento de séries.
</h3>

## Sobre
Neste projeto foram utilizados os seguintes conhecimentos:
- Validação de requisições;
- Utilização de sessão e flash messsages;
- Relacionamento entre models do Eloquent;
- Preocupação em performance em requisições no banco de dados;
- DB Transaction / Eloquent;
- Autenticação Manual com as ferramentas do Laravel;
- Autenticação utilizando breeze;
- Envio de e-mails utilizando SMTP;
- Filas e agendamento de processamento;
- Eventos;
- Upload de arquivos;
- Testes autimatizados com PEST;


## Rodando projeto
### Pré-requisitos
- Git
- Docker

### Passo a Passo
- 1- Clonar o repositório
```
https://github.com/nepogabriel/curso-laravel.git
```

- 2- Entre no diretório 
```bash
cd nome-do-diretorio
```

- 3- Configure variáveis de ambiente
```bash
cp .env.example .env
```

- 4- Instale as dependências
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

- 5- Inicie o container
```bash
./vendor/bin/sail up -d
```

- 6- Acesse o container
```bash
docker exec -it curso-laravel-laravel.test-1 bash
```

- 7- Dentro do container execute para gerar uma chave do laravel
```bash
php artisan key:generate
```

- 8- Dentro do container execute para criar as tabelas do banco de dados
```bash
php artisan migrate
```

- **Observação:** Caso apresente erro ao criar as tabelas do banco de dados, tente os comandos abaixo e execute novamente o comando para criação das tabelas. 
``` bash
# Primeiro comando
docker exec -it curso-laravel-laravel.test-1 bash

# Segundo comando
composer update
```

- 9- Link de acesso
```
http://localhost:8585/
```

### Banco de dados
- Porta externa: 33007
- Porta interna: 3306
- Banco de dados: app_series
- Usuário: root
- Senha:

## 👥 Contribuidores
Gabriel Ribeiro.
🌐 https://linkedin.com/in/gabriel-ribeiro-br/
