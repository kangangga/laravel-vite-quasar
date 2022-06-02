<template layout>
    <q-page padding>
        <q-card class="my-card">
            <q-card-section>
                <div class="text-h6">Create Data Customer</div>
            </q-card-section>

            <q-form @submit="onSubmit">
                <q-card-section>
                    <div class="row q-col-gutter-md">
                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="text"
                                label="Name"
                                v-model="form.name"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="number"
                                label="Phone"
                                v-model="form.phone"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="text"
                                label="Email"
                                v-model="form.email"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="text"
                                label="Address"
                                v-model="form.address"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="textarea"
                                label="Description"
                                v-model="form.description"
                            />
                        </div>

                        <div class="col-md-6 col-12 self-end">
                            <q-btn
                                color="primary"
                                icon="save"
                                label="Save"
                                class="full-width"
                                type="submit"
                                :loading="loading"
                            />
                        </div>
                    </div>
                </q-card-section>
            </q-form>
        </q-card>
    </q-page>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { reactive, ref } from "vue";

const loading = ref(false);

const form = reactive({
    name: "",
    phone: "",
    address: "",
    email: "",
    description: "",
});

const onSubmit = () => {
    loading.value = true;
    Inertia.post("/data-master/customer", form, {
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<style lang="scss" scoped></style>
