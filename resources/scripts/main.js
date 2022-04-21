import { createApp, h } from "vue";
import store from "@/stores";
import { createInertiaApp } from "@inertiajs/inertia-vue3";
import { importPageComponent } from "@/scripts/vite/import-page-component";

import { Quasar } from "quasar";
import quasaOptions from "./quasar.conf";

// Import icon libraries
import "@quasar/extras/material-icons/material-icons.css";
import "@quasar/extras/material-icons-outlined/material-icons-outlined.css";

// Import Quasar css
import "quasar/src/css/index.sass";

createInertiaApp({
    resolve: (name) =>
        importPageComponent(name, import.meta.glob("../views/pages/**/*.vue")),
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(store)
            .use(Quasar, quasaOptions)
            .use(plugin)
            .mount(el);
    },
});
