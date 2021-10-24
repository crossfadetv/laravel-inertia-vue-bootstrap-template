<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <Link class="navbar-brand" href="/">Laravel-Vue-Inertia</Link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <Link class="nav-link" aria-current="page" href="/" :class="{ 'active': $page.component === 'Home'}">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" aria-current="page" href="/about" :class="{ 'active': $page.component === 'About'}">About</Link>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</template>
<script>
    export default {

    };
</script>
