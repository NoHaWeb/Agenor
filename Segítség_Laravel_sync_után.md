Miután szinkronizáltad a local repo-dat a GIT-essel, a Laravel-t fel kell inicializálni a gépeden is.

1. Először a localhost-os MySQL-ben hozz létre egy új adatbázist. (legyen mondjuk: **laravel_db**)<br><br>
2. VS Code... Tölts be a szinkronizált mappádat:
    - mindenképpen ebben a mappában legyél, mikor a Terminál-ban dolgozol:<br>
    C:\\......\\*ahova_mentetted_a_helyi_gépeden_mappa*\Agenor\Files\Agenor1>
<br><br>
3. Jöhetnek a kódok a Terminálban (külön, külön):

**composer install**<br>
<br>
**npm install**<br>
<br>
**copy .env.example .env**
<br>
>[!IMPORTANT]
>itt állíts be az .env file-t. Ezeket módosítsd:    
>**DB_CONNECTION=mysql**<br>
>**DB_HOST=localhost**<br>
>**DB_DATABASE=laravel_db**<br>
>**DB_USERNAME=root**<br>
>**DB_PASSWORD=**<br>
<br>

**php artisan key:generate**<br>
<br>
**php artisan migrate:fresh**
<br>    
**composer dump-autoload**

