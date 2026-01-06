import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/canvas.js',
                'resources/js/draggable.js',
                'resources/css/darkmode.css',
            ],
            refresh: true,
        }),
    ],
});
