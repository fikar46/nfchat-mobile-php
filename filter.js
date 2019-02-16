var minum = (arr,fn)=>{
    var newArr = [];
    for(var i = 0; i<arr.length; i++){
        if(fn(arr[i])){
            newArr.push(arr[i]);
        }
    }
    return newArr
}


var x = ['aqua','ades','pristine'];
var y = minum(x,(val)=> val !== 'aqua');
var z = minum(x, (val)=> val == 'ades');
var u = x.map((val) => val == 'pristine');// hasilnya false false true 
console.log(y);
console.log(z);
console.log(u);
console.log(Math.sqrt(9));