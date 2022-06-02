import { defineConfig, loadEnv } from "vite";
import laravel from "vite-plugin-laravel";
import vue from "@vitejs/plugin-vue";
import { quasar, transformAssetUrls } from "@quasar/vite-plugin";
import inertiaLayout from "./resources/scripts/vite/inertia-layout";
import pwa from "./resources/scripts/vite/pwa";

export default defineConfig({
    server: {
        host: "0.0.0.0",
    },
    plugins: [
        inertiaLayout(),
        laravel(),
        pwa(),
        vue({
            template: { transformAssetUrls },
        }),
        quasar({
            sassVariables: "resources/css/quasar-variables.scss",
        }),
    ],
});
