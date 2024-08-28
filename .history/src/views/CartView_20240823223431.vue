<script setup>

const cart = JSON.parse(localStorage.getItem("cart"))
let f_check_length_cart = false;

if (cart.length > 0) {
  f_check_length_cart = true;
}

</script>
<template>
  <table border="1px" style="border-collapse: collapse">
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>IMAGE</th>
        <th>PRICE</th>
        <th>QTY</th>
        <th>TOTAL</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody id="tbody">
      <tr class="row-cart" v-if="f_check_length_cart" v-for="(value, key) in cart">
        <td>{{ key + 1 }}</td>
        <td>{{ value.name }}</td>
        <td>{{ value.image }}</td>
        <td>{{ value.price.toLocaleString() }}</td>
        <td id="qty">
          <ul>
            <li>
              <button @click="increaseQtyInCart(key)" id="decrease" type="button">
                <span class="material-symbols-outlined"> remove </span>
              </button>
            </li>
            <li id="number_qty">{{ value.qty }}</li>
            <li>
              <button id="increase" type="button">
                <span class="material-symbols-outlined"> add </span>
              </button>
            </li>
          </ul>
        </td>
        <td>{{ (value.price * value.qty).toLocaleString() }}</td>
        <td style="text-align: center">
          <span @click="deleteOrder(value.id)" class="material-symbols-outlined delete-btn">
            delete
          </span>
        </td>
      </tr>
      <tr v-else>
        <td colspan="7" style="text-align: center">
          <span>You don't have any orders!</span>
        </td>
      </tr>
      <tr>
        <td colspan="5">SUBTOTAL</td>
        <td>{{ subtotal(cart).toLocaleString() }}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>

export default {
  cart: JSON.parse(localStorage.getItem("cart")),
  data() {
    return {
      cart: this.cart
    };
  },
  computed: {
    filteredCart() {
      return this.cart.filter((item) => item.id !== this.toDeleteId); // Filter based on toDeleteId
    },
  },
  methods: {
    deleteOrder(id) {
      const index = this.cart.findIndex(item => item.id === id);
      if (index !== -1) {
        this.cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(this.cart));

      }
    },
    decreaseQtyInCart(key) {
      // Decrease quantity logic
    },
    increaseQtyInCart(key) {
      // Increase quantity logic
    },
    subtotal(array) {
      let subtotal = 0;
      array.forEach((element) => {
        subtotal += element.qty * element.price;
      });
      return subtotal;
    },
  },
  watch: {
    toDeleteId(newId, oldId) {
      if (newId !== oldId) {
        // Update cart after confirmation
        this.cart = this.cart.filter((item) => item.id !== newId);
      }
    },
  },
};
</script>



<style scoped>
th,
td {
  padding: 20px;
}

.delete-btn {
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.delete-btn:hover {
  transform: scale(1.2);
  color: orangered;
}

#qty {
  text-align: center;
}

#qty ul {
  display: flex;
  align-items: center;
}

#number_qty {
  margin: 0px 20px;
  font-size: 20px;
}
</style>
