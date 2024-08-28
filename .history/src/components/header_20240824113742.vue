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
    border: 1px solid #a9a7a7;
    border-radius: 10px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    margin-bottom: 40px;
}

.header ul {
    display: flex;
    justify-content: space-around;
    width: 100%;
}

.header ul li {
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    padding: 10px 30px;
    border-radius: 10px;
    transition: all .3s ease-in-out;
}

.header ul li a {
    color: #000;
    font-size: 18px;
    font-weight: 600;
}

.header ul li:hover {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
}

.header ul li:hover a {
    color: #fff;
}
</style>