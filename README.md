
# Projecte Laravel

Aquest projecte és una aplicació desenvolupada amb Laravel. En aquest arxiu es documenta com executar les migracions i seeders, i es mostra una captura de pantalla del resultat final.

## Requisits previs

Abans de començar, assegura't que tens les següents eines instal·lades:

- **PHP** (>= 8.1)
- **Composer** (gestor de dependències de PHP)
- **MySQL / PostgreSQL / SQLite** (segons la configuració de la teva base de dades)
- **Node.js i npm** (si utilitzes Vite per al frontend)

## Configuració inicial

1. **Clonar el repositori:**

   Clona aquest repositori al teu sistema:

   git clone https://github.com/usuari/nombre-proyecto.git  
   cd nomb-carpeta

2. **Instal·lar les dependències:**

   Instala les dependències de PHP:

   composer install
   
4. **Configuració de la base de dades:**

   - Renombra el fitxer `.env.example` a `.env`:
     cp .env.example .env

   - Configura la connexió a la base de dades en el fitxer `.env`:
     DB_CONNECTION=sqlite  
     DB_DATABASE=/ruta-a-la-base-de-dades/database.sqlite

   Si utilitzes **MySQL** o **PostgreSQL**, ajusta les configuracions de connexió en el fitxer `.env`.

5. **Generar la clau d'aplicació:**

   Executa la següent comanda per generar una clau única per a l'aplicació:

   php artisan key:generate

## Executar les migracions i seeders

1. **Executar les migracions:**

   Un cop configurat el projecte, pots executar les migracions per crear les taules de la base de dades:

   php artisan migrate

2. **Executar els seeders:**

   Si tens seeders configurats per a omplir les taules amb dades inicials, executa aquesta comanda:

   php artisan db:seed

   Aquesta comanda executarà els seeders configurats a la teva aplicació i omplirà les taules de la base de dades amb dades d'exemple.

---

## Com executar l'aplicació

Per executar l'aplicació localment, utilitza el servidor integrat de Laravel:

php artisan serve

L'aplicació estarà disponible a la següent adreça: [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## Captura de pantalla del resultat

![image](https://github.com/user-attachments/assets/8282c41d-ac2a-457b-a7d8-173e10bbc3e4)

