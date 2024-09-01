import axios from 'axios'
const getData = async (id = null) => {
    try {
        let url = 'https://66cf2276901aab24842109d3.mockapi.io/api/products/products/'
        if (id !== null) {
            url += id
        }
        const res = await axios.get(
            url
        )
        console.log('getting data successfully!', res.data)
        return res.data
    } catch (error) {
        console.log(error);
    }
}

const addProduct = async () => {
    try {
        let url = 'https://66cf2276901aab24842109d3.mockapi.io/api/products/products/'
        const res = await axios.post(
            url,
            {
                'name': 'Product 6',
                'price': 231000,
                'qty': 23,
                'image': 'product-3.webp',
                'id': '6'
            }
        )
        console.log('getting data successfully!', res.data)
    } catch (error) {
        console.log(error);
    }
}


const deleteProduct = async (id) => {
    try {
        let url = 'https://66cf2276901aab24842109d3.mockapi.io/api/products/products/'
        url += id
        const res = await axios.delete(url)
        console.log('getting data successfully!', res.data)
    } catch (error) {
        console.log(error);
    }
}

function add() {
    return 'Hello i am add function'
}
export { getData, add, addProduct, deleteProduct }