<template>
    <div>
        <q-ajax-bar
            ref="bar"
            position="top"
            color="info"
            size="3px"
            skip-hijack
        />
        <q-drawer
            :model-value="main.drawer"
            :width="250"
            :breakpoint="500"
            bordered
            class="bg-grey-1"
        >
            <q-scroll-area class="fit">
                <q-list dense class="app-menu">
                    <q-item
                        clickable
                        @click="visit('/')"
                        active-class="app-menu-active"
                        :active="$page.component === 'home'"
                    >
                        <q-item-section avatar>
                            <q-icon name="dashboard" color="primary" />
                        </q-item-section>
                        <q-item-section> Dashboard </q-item-section>
                    </q-item>

                    <q-expansion-item dense :content-inset-level="0.1">
                        <template v-slot:header>
                            <q-item-section avatar>
                                <q-icon name="settings" color="primary" />
                            </q-item-section>

                            <q-item-section> Settings </q-item-section>
                        </template>

                        <q-item dense clickable>
                            <q-item-section avatar>
                                <q-icon name="chevron_right" color="primary" />
                            </q-item-section>
                            <q-item-section> General </q-item-section>
                        </q-item>

                        <q-expansion-item dense :content-inset-level="0.1">
                            <template v-slot:header>
                                <q-item-section avatar>
                                    <q-icon
                                        name="chevron_right"
                                        color="primary"
                                    />
                                </q-item-section>

                                <q-item-section> User </q-item-section>
                            </template>

                            <q-item dense clickable :inset-level="1">
                                <q-item-section> Avatar </q-item-section>
                            </q-item>
                        </q-expansion-item>
                    </q-expansion-item>

                    <q-item clickable>
                        <q-item-section avatar>
                            <q-icon name="logout" color="primary" />
                        </q-item-section>
                        <q-item-section> Logout </q-item-section>
                    </q-item>
                </q-list>
            </q-scroll-area>
        </q-drawer>
    </div>
</template>

<script setup>
import { computed, watch, ref } from "vue";
import { useMainStore } from "@/stores/main";
// import { usePage } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const bar = ref(null);
const main = useMainStore();
// const props = computed(() => usePage().props.value);
const loadingVisit = computed(() => main.loadingVisit);

const defaultConfig = {
    method: "get",
    data: {},
    replace: false,
    preserveState: false,
    preserveScroll: false,
    only: [],
    headers: {},
    errorBag: null,
    forceFormData: false,
    onCancelToken: (cancelToken) => {},
    onCancel: () => {},
    onBefore: (visit) => {},
    onStart: (visit) => {
        main.loadingVisit = true;
    },
    onProgress: (progress) => {},
    onSuccess: (page) => {},
    onError: (errors) => {},
    onFinish: (visit) => {
        main.loadingVisit = false;
    },
};

watch(loadingVisit, (loading) => {
    const barRef = bar.value;
    if (loading) {
        barRef.start();
    } else {
        barRef.stop();
    }
});

const visit = (url, config = {}) => {
    Inertia.visit(url, {
        ...defaultConfig,
        ...config,
    });
};
</script>

<style lang="scss" scoped>
.app-menu {
    .q-item {
        font-size: 12px;
    }
    .q-expansion-item {
        font-size: 12px;
    }

    .q-expansion-item__content {
        .q-item {
            border-radius: 0 10px 10px 0;
            margin-right: 12px;
        }
    }

    .app-menu-active {
        background-color: rgb(24 118 210 / 10%);
    }
}
</style>
