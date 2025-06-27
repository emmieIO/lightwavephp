# LightwavePHP

LightwavePHP is a lightweight PHP micro-framework that brings together:

- Raw PHP (no Laravel bloat)
- BladeOne (a fast, standalone Blade template engine)
- Vite (for blazing-fast front-end builds)
- TailwindCSS (utility-first styling)
- A simple DI container & router

Built to help you rapidly prototype or build minimal production-ready apps with modern tools.

---

## 🔧 Requirements

- PHP 8.1+
- Composer
- Node.js & npm

---

## 🚀 Getting Started

1. **Clone the repo:**

```bash
git clone https://github.com/yourusername/lightwavephp.git
cd lightwavephp
```

2. **Install PHP & Node dependencies:**

```bash
composer install
npm install
```

3. **Run dev servers:**

- Terminal 1:

```bash
php -S localhost:8000 -t public
```

- Terminal 2:

```bash
npm run dev
```

Visit `http://localhost:8000` — Vite handles assets, PHP handles views.

---

## 🛠 Production Build

Build assets with:

```bash
npm run build
```

Compiled files will be available in `public/dist` with versioned manifest support.

---

## 🧭 Routing

Define routes in `routes/web.php`:

```php
use Emmieio\PhpViteStarter\Facades\Route;

Route::get('/', fn () => app()->view('home', ['name' => 'Marko']));
Route::get('/about', fn () => 'About us');
```

---

## 🖼 Blade Templating

BladeOne is used for views in `resources/views`.

Example:

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $name }}</title>
    {!! $vite('resources/js/main.js') !!}
</head>
<body>
    <h1>Hello, {{ $name }}</h1>
</body>
</html>
```

---

## 🧪 .env Support

Environment variables are managed via `vlucas/phpdotenv`.

Create a `.env` file:

```
APP_NAME=LightwavePHP
APP_ENV=local
```

Use `env('APP_NAME')` anywhere.

---

## 📁 Project Structure

```
app/            - Core classes (Router, Container, etc.)
bootstrap/      - App loader and helper functions
public/         - Web root
resources/      - Views and front-end assets
routes/         - Route definitions
storage/        - View cache
vendor/         - Composer packages
```

---

## 🌐 Vite Config

Located in `vite.config.js`. Tailwind and hot reload are supported.

```js
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import { resolve } from 'path';

export default defineConfig({
  root: './resources',
  base: '/',
  plugins: [tailwindcss()],
  build: {
    outDir: '../public/dist',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: resolve(__dirname, 'resources/js/main.js')
    }
  }
});
```

---

## ✅ Roadmap Ideas

- Middleware support
- Named routes
- CLI tool (lightwave create:controller ...)
- Session & cookie helpers
- Database layer (optional)

---

## 📄 License

MIT © Marko / EmmieIO

---

## 🙌 Acknowledgements

- [eftec/BladeOne](https://github.com/EFTEC/BladeOne)
- [vitejs](https://vitejs.dev/)
- [TailwindCSS](https://tailwindcss.com/)
- [phpdotenv](https://github.com/vlucas/phpdotenv)

---

If you're enjoying this setup or want to contribute, star the repo and send PRs.  
Let's build the next great micro-framework together.
