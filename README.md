# E-softgraf  

## 1º Download  
    - Laragon
    - https://laragon.org/download/  
        - Laragon Full
    OU
    - Xampp
    - https://www.apachefriends.org/download.html
        - PHP 7.4

## 2º Download  
    - Composer  
    - https://getcomposer.org/download/  

## 3º Download  
    - Node Js  
    - https://nodejs.org/en/  
    -- LTS

## Instalando Laravel e Criando Projeto  
    - composer global require laravel/installer  
    - composer create-project --prefer-dist laravel/laravel="7.*" nome_projeto  
        - "7.*" está se referindo a versão do laravel  

## Instalando Node_modules dentro do projeto  
    Ao acessar a pasta do projeto, cd C:\PATH_DO_PROJETO, rodar comando "npm i" para baixar o node  

## Rodando Laravel  
    Dentro da pasta do projeto, cd C:\PATH_DO_PROJETO, rodar comando para inicializar o laravel  
    - php artisan serve  
      
    Outro meio de ver a aplicação rodando é colocar o projeto dentro do WWW do laragon  
        - cd C:\laragon\www
        - No navegador localhost/nome_projeto/public

## Rodando Laravel baixado do GIT  
    - cd laravel
    - composer install
    - criar arquivo .env
    - php artisan key:generate
    - php artisan serve  


## ADMIN TEMPLATE  
    - https://github.com/colorlibhq/AdminLTE  

## PLUGINS  
    - INPUT MASK: https://github.com/RobinHerbots/Inputmask  
    - TOASTR: https://github.com/CodeSeven/toastr  