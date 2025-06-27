# LightwavePHP

**LightwavePHP** is a lightweight and modern PHP micro-framework starter built with:

- ⚡️ [Vite](https://vitejs.dev/) for frontend tooling
- 🎨 [Tailwind CSS](https://tailwindcss.com/) for styling
- 🧠 [BladeOne](https://github.com/EFTEC/BladeOne) for templating
- 💡 Custom routing & service container
- 🔧 `.env` support with [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)

---

## 🚀 Features

- Fully decoupled, raw PHP (no Laravel dependency)
- Blade templating via BladeOne
- Modern asset pipeline using Vite + TailwindCSS
- Clean routing system (`Route::get(...)`)
- Simple service container + Facade-style access
- Environment configuration using `.env`

---

## 📦 Installation

```bash
git clone https://github.com/emmieio/lightwavephp.git
cd lightwavephp
composer install
npm install
npm run dev