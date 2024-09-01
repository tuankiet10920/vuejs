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
function add() {
    return 'Hello i am add function'
}
export { getData, add }