# Blog

Um projeto de blog utilizando [Laravel](https://laravel.com/), baseado nos conceitos e técnicas apresentados no curso do Laracasts [Laravel 8 From Scratch](https://laracasts.com/series/laravel-8-from-scratch), disponível gratuitamente.

## Prerequisitos

- Docker

## instalação

O blog utiliza o [Sail](https://laravel.com/docs/8.x/sail) para gerenciar os contêineres Docker que rodam a aplicação. Para instalar as dependências iniciais, execute o código abaixo, que irá criar um novo container para automatizar a instalação 

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

A partir daí, todos os comandos executados dentro do contêiner devem utilizar o Sail. Para mais detalhes, consulte a [documentação do Sail](https://laravel.com/docs/8.x/sail)
