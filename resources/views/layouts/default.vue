<template>
    <q-layout view="hHh Lpr lff">
        <layout-header />
        <layout-drawer />

        <q-page-container>
            <slot />
        </q-page-container>
    </q-layout>
</template>

<script setup>
// This is a peristent layout
// Include me with <template layout="default" />

import { useMainStore } from "@/stores/main";
import LayoutHeader from "@/views/components/layouts/header.vue";
import LayoutDrawer from "@/views/components/layouts/drawer.vue";

const main = useMainStore();
</script>
