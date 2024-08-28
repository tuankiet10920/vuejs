function CheckIdInData(array, id){
    let flag = false
    array.forEach(element => {
        if (element.id === id) {
            flag = true
            return flag
        }
    });
    return flag
}