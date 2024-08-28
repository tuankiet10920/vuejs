<script setup>
import { ref } from 'vue';

const componentKey = ref(false);

const forceRerender = () => {
  if (componentKey.value) {
    componentKey.value = false
  } else {
    componentKey.value = true
  }
};

let cart = JSON.parse(localStorage.getItem("cart"))


function subtotal(array) {
  let subtotal = 0
  array.forEach(element => {
    subtotal += element.qty * element.price
  });
  return subtotal
}

function clickDeleteCart(array, id) {
  array.forEach((element, index) => {
    if (element.id === id) {
      array.splice(index, 1)
      localStorage.setItem('cart', JSON.stringify(array))
      forceRerender()
    }
  });
}

function clickDescrease(array, id) {
  array.forEach((element, index) => {
    if (element.id === id) {
      array[index].qty--
      localStorage.setItem('cart', JSON.stringify(array))
      forceRerender()
    }
  });
}

</script>
<template>
  <div>
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
        <tr v-for="(element, key) in cart" :key="componentKey">
          <td>{{ key + 1 }}</td>
          <td>{{ element.name }}</td>
          <td>
            <img id="image" :src="'../../public/img/' + element.image" alt="product-1">
          </td>
          <td>{{ element.price.toLocaleString() }}</td>
          <td>
            <ul id="quantity">
              <li>
                <button @click="clickDescrease(cart, element.id)" class="btn-remove" type="button">
                  <span class="material-symbols-outlined">
                    remove
                  </span>
                </button>
              </li>
              <li>
                <span class="qty">{{ element.qty }}</span>
              </li>
              <li>
                <button class="btn-add" type="button">
                  <span class="material-symbols-outlined">
                    add
                  </span>
                </button>
              </li>
            </ul>
          </td>
          <td>{{ (element.qty * element.price).toLocaleString() }}</td>
          <td style="text-align: center;">
            <button id="btn-delete" @click="clickDeleteCart(cart, element.id)" type="button">
              Del
            </button>
          </td>
        </tr>
        <tr>
          <td colspan="5">Subtotal</td>
          <td>{{ subtotal(cart).toLocaleString() }}</td>
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

#quantity {
  display: flex;
  align-items: center;
}

.qty {
  margin: 0px 20px;
  font-size: 20px;
  font-size: 600;
}

.btn-add span,
.btn-remove span {
  font-size: 18px;
}

.btn-add,
.btn-remove {
  padding: 5px 10px;
  border: none;
  background: orangered;
  color: #fff;
  border-radius: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: all .3s ease-in-out;
  cursor: pointer;
}

.btn-add:hover,
.btn-remove:hover {
  background: #822706;
  box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
</style>