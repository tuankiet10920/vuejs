export function CheckIdInData(array, id){
    let flag = false
    let index = null
    array.forEach((element, key) => {
        if (element.id === id) {
            flag = true
            index = key
            return {
                flag,
                index
            }
        }
    });
    return {
        flag,
        index
    }
}
