<template layout>
    <q-page padding>
        <q-card class="my-card">
            <q-card-section>
                <div class="text-h6">Edit Data Customer</div>
            </q-card-section>

            <q-form @submit="onSubmit">
                <q-card-section>
                    <div class="row q-col-gutter-md">
                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="text"
                                label="Name"
                                v-model="customer.name"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="number"
                                label="Phone"
                                v-model="customer.phone"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="text"
                                label="Email"
                                v-model="customer.email"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="text"
                                label="Address"
                                v-model="customer.address"
                            />
                        </div>

                        <div class="col-md-6 col-12">
                            <q-input
                                outlined
                                type="textarea"
                                label="Description"
                                v-model="customer.description"
                            />
                        </div>

                        <div class="col-md-6 col-12 self-end">
                            <q-btn
                                color="primary"
                                icon="save"
                                label="Update"
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
import { ref } from "vue";

const loading = ref(false);

const props = defineProps(["customer"]);

const onSubmit = () => {
    loading.value = true;
    Inertia.put(`/data-master/customer/${props.customer.id}`, props.customer, {
        onFinish: () => {
            loading.value = false;
        },
    });
};
</script>

<style lang="scss" scoped></style>
