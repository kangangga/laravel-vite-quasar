<template layout>
    <q-page padding class="flex flex-center">
        <q-card flat>
            <q-card-section class="text-center">
                <q-img :src="logo" alt="My logo" width="200px" />
            </q-card-section>

            <q-card-section class="text-center">
                <span class="text-h1">{{ counter.getCount }}</span>
            </q-card-section>

            <q-card-actions vertical align="center">
                <q-btn flat label="increment" @click="counter.increment" />
            </q-card-actions>
        </q-card>
    </q-page>
</template>

<script setup>
import logo from "assets/logo.svg";
import { useCounterStore } from "store/counter";
const counter = useCounterStore();
</script>

<style lang="scss" scoped></style>
