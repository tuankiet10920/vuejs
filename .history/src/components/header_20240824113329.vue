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
    padding: 20px 0px;
    border-bottom: 1px solid #a9a7a7;
    border-top: 1px solid #a9a7a7;
}

.header ul {
    display: flex;
    justify-content: space-around;
    width: 100%;
}

.header ul li {
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    padding: 5px 20px;
}

.header ul li a {
    color: #000;
    font-size: 20px;
    font-weight: 600;
}
</style>