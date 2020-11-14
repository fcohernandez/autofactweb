Pasos para funcionar

composer require laravel/homestead --dev

vendor\\bin\\homestead make

Configurar archivo homestead.yaml

Una vez dentro de la maquina virtual

composer install
yarn install
yarn run dev


//Para crear base de datos y datos de prueba, en este caso solo los roles y el usuario administrador
php artisan migrate:fresh --seed

cuenta usuario administrador
admin@autofact.cl
password: 12345678
