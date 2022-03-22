<template>
    <div>
        <TheNavbar></TheNavbar>

        <TheFooter></TheFooter>
    </div>
</template>

<script>
import TheNavbar from "../components/TheNavbar.vue";
import TheFooter from "../components/TheFooter.vue";

export default {
    components: { TheNavbar, TheFooter },
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
<style></style>
