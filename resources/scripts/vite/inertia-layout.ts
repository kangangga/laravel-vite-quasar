import type { Plugin } from "vite";

const PLUGIN_NAME = "vite:inertia:layout";
const TEMPLATE_LAYOUT_REGEX =
    /<template +layout(?: *= *['"]([-_\w\/]+)['"] *)?>/;

/**
 * @param {string} layouts
 * @returns {Plugin}
 * @example <template layout="name"> .... </template>
 */
export default (layouts: string = "@/views/layouts/"): Plugin => ({
    name: PLUGIN_NAME,
    transform: (code: string) => {
        if (!TEMPLATE_LAYOUT_REGEX.test(code)) return;

        const isTypeScript = /lang=['"]ts['"]/.test(code);

        return code.replace(
            TEMPLATE_LAYOUT_REGEX,
            (_, layoutName) => `
			<script${isTypeScript ? ' lang="ts"' : ""}>
			import layout from '${layouts}${layoutName ?? "default"}.vue'
			export default { layout }
			</script>
			<template>
		`
        );
    },
});
