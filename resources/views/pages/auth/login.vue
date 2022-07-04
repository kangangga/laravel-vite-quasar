<template layout="AuthLayout">
    <q-page class="row flex flex-center q-pa-md">
        <div class="col-md-4 col-xs-12">
            <q-card>
                <q-card-section class="text-center">
                    <q-img src="@storage/public/logo.png" width="15rem" />
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
                                ref="branch_code"
                                v-model="form.branch_code"
                                label="Kode Cabang"
                                type="number"
                                lazy-rules
                                outlined
                                dense
                                hide-bottom-space
                                :rules="[
                                    checkBranchCode,
                                    (val) =>
                                        (val && val.length > 0) ||
                                        'Kode Cabang tidak boleh kosong',
                                ]"
                            ></q-input>

                            <q-input
                                autocomplete="username"
                                v-model="form.username"
                                label="Username"
                                type="text"
                                lazy-rules
                                outlined
                                dense
                                hide-bottom-space
                                :rules="[
                                    (val) =>
                                        (val && val.length > 0) ||
                                        'Username tidak boleh kosong',
                                ]"
                            ></q-input>

                            <q-input
                                autocomplete="new-password"
                                v-model="form.password"
                                label="Password"
                                type="password"
                                lazy-rules
                                outlined
                                dense
                                hide-bottom-space
                                :rules="[
                                    (val) =>
                                        (val && val.length > 0) ||
                                        'Password tidak boleh kosong',
                                ]"
                            ></q-input>
                        </div>
                    </q-card-section>

                    <q-card-section class="q-pt-sm">
                        <q-btn
                            color="primary"
                            class="full-width"
                            label="Login"
                            :loading="loading"
                            type="submit"
                        >
                        </q-btn>
                    </q-card-section>

                    <q-separator />

                    <q-card-actions align="center">
                        <q-btn
                            no-caps
                            outline
                            :loading="loading"
                            class="tw-text-blue-400"
                            @click="doLoginSosmed('google')"
                        >
                            <q-icon
                                left
                                size="2em"
                                :name="`img:${iconGoogle}`"
                            />
                            <div class="tw-text-slate-500">
                                Login dengan Google
                            </div>
                        </q-btn>
                    </q-card-actions>
                </q-form>
            </q-card>
        </div>
    </q-page>
</template>

<script setup lang="ts">
import { computed, reactive, ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import iconGoogle from "@public/icons/icon-google.svg";
import { Notify, QInput } from "quasar";
// import { ionLogoGoogle } from "@quasar/extras/ionicons-v6";

const loading = ref(false);

const branch_code = ref<InstanceType<typeof QInput> | null>(null);
const form = reactive({
    username: "",
    password: "",
    branch_code: "",
});

const checkBranchCode = (val: any) => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            //  resolve(true) is valid
            //  resolve(false) is NOT valid, no error message
            //  resolve(error_message) is NOT valid, we have error message
            resolve("* Required");
        }, 1000);
    });
};

const doLogin = (): void => {
    loading.value = true;
    Inertia.post("/auth/login", form, {
        onFinish: () => {
            loading.value = false;
        },
    });
};

const doLoginSosmed = (sosmed: string): void => {
    if (form.branch_code) {
        loading.value = true;
        Inertia.post(`/auth/login/sosmed/${sosmed}`, form, {
            onFinish: () => {
                loading.value = false;
            },
        });
    } else {
        // Notify.create({
        //     message: "Silahkan masukkan kode cabang terlebih dahulu",
        //     color: "negative",
        //     icon: "warning",
        //     position: "top",
        // });
        branch_code?.value?.validate();
    }
};
</script>

<style lang="scss" scoped></style>
