<template>
    <Head>
        <title>{{ head.title }}</title>
        <meta name="description" v-bind:content="head.description">
    </Head>
    <h1>Home</h1>
    <p>{{ text }}</p>
</template>
<script>
    export default {
        props: {
            text: String,
            head: Object
        },
    };
</script>
