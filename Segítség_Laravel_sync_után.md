Miután szinkronizáltad a local repo-dat a GIT-essel, a Laravel-t fel kell inicializálni a gépeden is.

1.) Először a localhost-os MySQL-ben hozz létre egy új adatbázist. (legyen mondjuk **laravel_db**)
2.) VS Code... Tölts be a szinkronizált mappádat:
    - mindenképpen ebben a mappában legyél, mikor a Terminál-ban dolgozol:
    *ahova_mentetted_a_helyi_gépeden_mappa*\Agenor\Files\Agenor1>

3.) Jöhetnek a kódok a Terminálban (küön, külön):

    **composer install**

    **npm install**

    **copy .env.example .env**
    > [!NOTE]
    >itt állíts be az .env file-t. Ezeket módosítsd:    
    > DB_CONNECTION=mysql
    > DB_HOST=localhost
    > DB_DATABASE=laravel_db
    > DB_USERNAME=root
    > DB_PASSWORD=

    **php artisan key:generate**

    **php artisan migrate:fresh**
    
    **composer dump-autoload**

