<template layout>
    <q-page padding>
        <q-card class="my-card">
            <q-card-section class="row">
                <div class="text-h6 col-auto">Data Customer</div>
                <q-space />

                <div>
                    <q-btn
                        color="primary"
                        icon="add"
                        label="Customer"
                        @click="visit('/data-master/customer/create')"
                    />
                </div>
            </q-card-section>

            <q-card-section>
                <q-table flat row-key="id" :rows="customers" :columns="columns">
                    <template v-slot:body-cell-button="props">
                        <q-td :props="props">
                            <div class="q-gutter-sm">
                                <q-btn
                                    dense
                                    size="sm"
                                    color="info"
                                    icon="edit"
                                    @click="
                                        visit(
                                            `/data-master/customer/${props.row.id}/edit`
                                        )
                                    "
                                />

                                <q-btn
                                    dense
                                    size="sm"
                                    color="red"
                                    icon="delete"
                                    @click="onDelete(props)"
                                />
                            </div>
                        </q-td>
                    </template>
                </q-table>
            </q-card-section>
        </q-card>
    </q-page>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";

const props = defineProps(["customers"]);

const onDelete = ({ row }) => {
    Inertia.delete(`/data-master/customer/${row.id}`);
};

const visit = (path) => {
    Inertia.visit(path);
};

const columns = [
    {
        name: "name",
        field: "name",
        label: "Name",
        sortable: true,
        align: "left",
    },
    {
        name: "phone",
        field: "phone",
        label: "Phone",
        sortable: true,
        align: "left",
    },
    {
        name: "address",
        field: "address",
        label: "Address",
        sortable: true,
        align: "left",
    },
    {
        name: "email",
        field: "email",
        label: "Email",
        sortable: true,
        align: "left",
    },
    {
        name: "description",
        field: "description",
        label: "Description",
        sortable: true,
        align: "left",
    },
    {
        name: "button",
        label: "Action",
        align: "left",
    },
];
</script>

<style lang="scss" scoped></style>
