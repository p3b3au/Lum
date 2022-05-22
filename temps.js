function globalTime(param){
    setTimeout(addOne, param)
}

const D = 0;

function addOne(){
 D += 1
}

console.log(D);