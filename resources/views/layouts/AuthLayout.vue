<template>
    <q-layout view="hHh Lpr lff">
        <q-page-container>
            <slot />
        </q-page-container>
    </q-layout>
</template>

<script setup lang="ts">
import { Notify } from "quasar";
import { computed, watch } from "vue";
import { usePage } from "@inertiajs/inertia-vue3";

// import { useRegisterSW } from "virtual:pwa-register/vue";
// const { offlineReady, needRefresh, updateServiceWorker } = useRegisterSW();

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
