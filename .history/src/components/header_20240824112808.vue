<template>
    <div class="header">
        <ul>
            <li>
                <RouterLink to="/">Home</RouterLink>
            </li>
            <li>
                <RouterLink to="/about">About</RouterLink>
            </li>
            <li>
                <RouterLink to="/cart">Cart</RouterLink>
            </li>
        </ul>
    </div>
</template>

<script>
export default {

}
</script>

<style>
.header {
    width: 100%;
}

.header ul {
    display: flex;
    justify-content: start;
    width: 100%;
}

.header ul li {
    margin-right: 20px;
}

.header ul li a {
    color: #000;
    font-size: 20px;
    font-weight: 600;
}
</style>