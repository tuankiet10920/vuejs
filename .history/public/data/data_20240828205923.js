import axios from 'axios'
const getData = async () => {
    try {
        const res = await axios.get(
            'https://66cf2276901aab24842109d3.mockapi.io/api/products/products'
        )
        console.log(res)
    } catch (error) {
        console.log(error);
    }
}
export default getData