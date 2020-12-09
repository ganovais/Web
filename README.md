# PROJETO LIBRARY  

## 1º Cria projeto dentro do HTDOCS
    - Abrir terminal
        - cd c:\xampp\htdocs  

    - composer create-project --prefer-dist laravel/laravel="7.*" library
    - cd library
    - Abrir projeto LIBRARY no VSCode

## Onde ficam os CONTROLADORES?
    PROJETO -> app -> http -> controllers

## 2º Views necessárias para o projeto LIBRARY
    - LIBRARY -> resources -> views  
        - Criar pastas 'site' e 'system' para salvar suas telas correspondentes e evitar desordem no árvore do laravel  
        **SITE**  
        - Home  
        - Listagem de livros  
        - Detalhe do livro
        - Listagem de autores  
        - Contato  
        - Login   
  
        **SYSTEM**  
        - Cadastro/Update de autor
        - Listagem de autores
        - Cadastro/Update de gênero
        - Listagem de gênero
        - Cadastro/Update de livro
        - Listagem de livros
        **opcional**
        - Cadastro/Update de banner
        - Listagem de banners

## 3º Back-end
    - Routes
    - Controllers
    - Requests
    - Services
    - Modules/Models
    - Fazer funcionar os formulários

## Criar lógica do login laravel
    - composer require laravel/ui:^2.4
    - php artisan ui vue --auth

## ADMIN TEMPLATE  
    - https://github.com/colorlibhq/AdminLTE  

## PLUGINS  
    - INPUT MASK: https://github.com/RobinHerbots/Inputmask  
    - TOASTR: https://github.com/CodeSeven/toastr  
    - AXIOS: https://github.com/axios/axios


# Branchs
## Aulas HTML + CSS
    - 1 - 5

## Aulas JS
    - 6 e 7

## Aulas JS e Modelagem do banco de dados
    - 8

## Aula Revisão
    - 9 e 10

## Restante Laravel


