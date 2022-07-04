// Import Quasar css
import "quasar/src/css/index.sass";
// Import Tailwind css
import "../css/tailwind.css";

// Import icon libraries
import "@quasar/extras/material-icons/material-icons.css";
import "@quasar/extras/material-icons-outlined/material-icons-outlined.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { importPageComponent } from "@/scripts/vite/import-page-component";

import store from "../stores";
import { Quasar } from "quasar";
import quasaOptions from "./quasar.conf";

createInertiaApp({
    resolve: (name) =>
        importPageComponent(name, import.meta.glob("../views/pages/**/*.vue")),
    setup({ el, app, props, plugin }) {
        const App = createApp({ render: () => h(app, props) });
        App.use(plugin);
        App.use(store);
        App.use(Quasar, quasaOptions);
        App.mount(el);
    },
});
