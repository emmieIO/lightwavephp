import { defineConfig } from 'vite'
import tailwindcss from '@tailwindcss/vite';
import { resolve } from 'path'

export default defineConfig({
    root: 'resources',
    base: '/',
    plugins: [
        tailwindcss(),
    ],
    build: {
        outDir: '../public/dist',
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: resolve(__dirname, 'resources/js/main.js')
        }
    }
});