<script setup>
let cart = JSON.parse(localStorage.getItem("cart"))

function changeSrc(index, array) {
  let src = '../../public/img/'
  array.forEach((element, key) => {
    if (key === index) {
      src += element.image
    }
  });
  return src
}

function total(key, array) {

}


</script>
<template>
  <div>
    <h1>Hello i am cart</h1>
    <table border="1px">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Image</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Total</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(element, key) in cart">
          <td>{{ key + 1 }}</td>
          <td>{{ element.name }}</td>
          <td>
            <img id="image" :src="'../../public/img/' + element.image" alt="product-1">
          </td>
          <td>{{ element.price.toLocaleString() }}</td>
          <td>{{ element.qty.toLocaleString() }}</td>
          <td>{{ (element.qty * element.price).toLocaleString() }}</td>
          <td style="text-align: center;">
            <button id="btn-delete" type="button">
              Del
            </button>
          </td>
        </tr>
        <tr>
          <td colspan="5">Subtotal</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>


<style>
table {
  border-collapse: collapse;
}

th,
td {
  padding: 15px 40px;
}

#image {
  width: 70px;
}

#btn-delete {
  border: none;
  padding: 10px 25px;
  background: orangered;
  color: #fff;
  font-size: 18px;
  border-radius: 10px;
  transition: all .3s ease-in-out;
  cursor: pointer;
}

#btn-delete:hover {
  background: #822706;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
}
</style>