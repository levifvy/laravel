import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'], // Archivos de entrada
            refresh: true, // Activa el refresco de página cuando se detecten cambios
        }),
    ],
});
