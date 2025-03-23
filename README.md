# 📝 Laravel Todo App

Ez egy tanulóprojekt, amelyet azért készítettem, hogy megismerkedjek a Laravel keretrendszer alapszintű működésével. A projekt célja, hogy átlássam és megértsem az MVC struktúrát, a routing rendszert és a modellek, migrációk kezelését. Ez az egyszerű alkalmazás demonstrálja továbbá a RESTful és a CRUD műveleteket is.

## ⚙️ Technológiák
- Laravel
- PHP
- Tailwind CSS
- MySQL (Eloquent ORM)
- Blade
- RESTful route-ok

## 💡 Funkciók
- Új todo hozzáadása (validálással)
- Todo státusz váltása (completed / not completed)
- Todo törlése
- Visszajelzések `session` alapú üzenetekkel
- Tailwind CSS dizájn
- Layout (`@extends`, `@yield`)

## 📁 MVC struktúra
- Model: `App\Models\Todo`
- View: Blade fájlok a `resources/views`
- Controller logic: `routes/web.php`

## 📚 Amit megtanultam
- Laravel alap workflow
- Route és view kapcsolat
- Blade szintaxis alapjai
- Migrációk és Eloquent modellek
- Session alapú üzenetek
- Űrlapok kezelése (`@csrf`, `@method`)

## 🚧 Állapot
Ez egy WIP (work in progress) tanulóprojekt, nem célja a production szint elérése. A cél a tudás bővítése és továbblépés haladó Laravel fejlesztés irányába.

## 🚀 Setup

1. Klónozd a repót:
   ```bash
   git clone https://github.com/Csaba44/laravel-todo.git
   ```

2. Lépj be a könyvtárba:
   ```bash
   cd laravel-todo
   ```

3. Telepítsd a Composer és NPM csomagokat:
   ```bash
   composer install
   npm install
   ```

4. Másold le az `.env.example` fájlt és állítsd be:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Állítsd be a .env fileban az APP_URL-t, pl.:
    ```bash
   APP_URL=http://localhost/laravel-todo/public/
   ```

6. Állítsd be az adatbázis kapcsolatot az `.env` fájlban, majd futtasd a migrációkat:
   ```bash
   php artisan migrate
   ```

7. Indítsd el a szervert:
   ```bash
   npx vite
   ```
