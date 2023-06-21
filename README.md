
<p>Wajib Install Composer bisa Search Google Sesuai OS Masing-Masing.</p>

Clonning this repo

```bash
  git clone https://github.com/noname-03/Laravel10-PAK/
```

go to root project and then

Install module with composer 

```bash
  composer install
```

Copy file .env.example .env

```bash
  = Windows = 
  copy .env.example .env 

  = Linux/Unix =
  cp .env.example .env
```

<p>Set your database in .env</p>

<p>Generate Key</p>

```bash
  php artisan key:generate
```

<p>Migrate database with seeder</p>

```bash
  php artisan migrate --seed
```

<h2>RUN!</h2>>

```bash
  php artisan serve
```

