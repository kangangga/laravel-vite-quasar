<template layout="AuthLayout">
    <q-page class="row flex flex-center q-pa-md">
        <div class="col-md-4 col-xs-12">
            <q-card>
                <q-card-section>
                    <div class="text-h6">Login</div>
                </q-card-section>

                <!-- <q-separator /> -->

                <q-form
                    @submit="doLogin"
                    autocorrect="off"
                    autocapitalize="off"
                    autocomplete="off"
                    spellcheck="false"
                >
                    <q-card-section>
                        <div class="q-gutter-sm">
                            <q-input
                                v-model="form.branch_code"
                                label="Kode Cabang"
                                type="number"
                                lazy-rules
                                :rules="[
                                    (val) =>
                                        (val && val.length > 0) ||
                                        'Kode Cabang tidak boleh kosong',
                                ]"
                            ></q-input>

                            <q-input
                                v-model="form.username"
                                label="Username"
                                type="text"
                                lazy-rules
                                :rules="[
                                    (val) =>
                                        (val && val.length > 0) ||
                                        'Username tidak boleh kosong',
                                ]"
                            ></q-input>

                            <q-input
                                v-model="form.password"
                                label="Password"
                                type="password"
                                lazy-rules
                                :rules="[
                                    (val) =>
                                        (val && val.length > 0) ||
                                        'Password tidak boleh kosong',
                                ]"
                            ></q-input>
                        </div>
                    </q-card-section>

                    <q-card-section>
                        <q-btn
                            color="primary"
                            class="full-width"
                            label="Login"
                            :loading="loading"
                            type="submit"
                        >
                        </q-btn>
                    </q-card-section>
                </q-form>
            </q-card>
        </div>
    </q-page>
</template>

<script setup lang="ts">
import { reactive, ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

const loading = ref(false);

const form = reactive({
    username: "",
    password: "",
    branch_code: "",
});

const doLogin = (): void => {
    loading.value = true;
    Inertia.post("/auth/login", form, {
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<style lang="scss" scoped></style>
