import { defineStore } from "pinia";

export const useMainStore = defineStore("main", {
    state: () => {
        return {
            drawer: false,
            loadingVisit: false,
        };
    },
    actions: {
        setDrawer(value: any) {
            this.drawer = value;
        },
        setLoadingVisit(value: any) {
            this.loadingVisit = value;
        },
    },
    persist: true,
});
