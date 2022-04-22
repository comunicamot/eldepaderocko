<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
   
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                    ? 't_link text-white border-b-2 border-white'
                    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium  text-white  hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition t_link'
            }
        }
    })
</script>

<style scoped>

</style>