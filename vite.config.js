import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // Wildcard to include all files in the resources directory
                'resources/**/*',
            ],
            refresh: true,
        }),
    ],
});
