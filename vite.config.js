import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            protocol: 'wss',
            host: 'stipendiendebakel.ddev.site'
        }
    },
    resolve: {
        alias: {
            '@fonts': '/resources/css/typography/fonts',
        },
    },
    esbuild: {
        drop: ["console", "debugger"]
    }

});
