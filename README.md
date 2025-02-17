# Sistema de Gerenciamento de Consultas Médicas

> Sistema para agendamento e gerenciamento de consultas médicas.

## Índice

1. [Sobre](#sobre)
2. [Instalação](#instalação)
3. [Uso](#uso)
4. [Tecnologias](#tecnologias)

## Sobre

Este projeto foi desenvolvido para facilitar o gerenciamento de consultas médicas, permitindo o agendamento de consultas, o gerenciamento de especialidades médicas e o cadastro de pacientes.

---

## Instalação

1. git clone https://github.com/YuriAldair1/teste-php-asa.git

### Pré-requisitos 

- PHP 7.4 ou superior
- Composer
- MySQL/MariaDB


## uso. execucão do docker 

1. docker compose -f "docker-compose.yml" up --build -d

2. criar e acessar banco **asa**
 - localhost
 - senha:123456
 - bd:asa
 - porta:2121
 - user:root

### outra forma de criar o banco

2.1. docker-compose exec db bash
2.2. mysql -u root -p123456
2.3. CREATE DATABASE asa;


### executar o migrate

3. docker-compose exec app php artisan migrate --seed

4. docker-compose exec app php artisan db:seed

### se precisar atualizar o banco 

5. docker-compose exec app php artisan migrate:refresh --seed

[execucoes_se_precisar_necessarias]

docker-compose exec app composer install
docker-compose exec app composer update
docker-compose exec app composer key:generate

## tecnologias

- docker
- mariadb:10.4
- laravel@7.4

###carrgar css se necessario

docker-compose exec app php npm run prod