<template>
    <q-layout view="hHh Lpr lff">
        <!-- <layout-header />
        <layout-drawer /> -->

        <q-page-container>
            <slot />
        </q-page-container>
    </q-layout>
</template>

<script setup lang="ts">
// Include me with <template layout="default" />

// import LayoutHeader from "@/views/components/layouts/header.vue";
// import LayoutDrawer from "@/views/components/layouts/drawer.vue";

import { Notify } from "quasar";
import { computed, watch } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";

const flash = computed(() => usePage().props.value.flash);
watch(flash, (value: any) => {
    for (const key in value) {
        if (Object.hasOwnProperty.call(value, key)) {
            const message = value[key];
            if (message) {
                Notify.create({
                    message,
                    color: key,
                    timeout: 3000,
                    position: "top",
                });
            }
        }
    }
});
</script>
