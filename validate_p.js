
let nameNode = document.getElementById("name");
let errNode1 = document.getElementById("err1");

function validatename(){
    errNode1.innerHTML = "";
    let name = nameNode.value;
    
    let regexpress=new RegExp("^([a-zA-Z ])*$");
    if(name===""){
        errNode1.innerHTML = "<b> This field is required.</b>";
       
        return false;
    }
    else if(regexpress.test(name)==false){
        errNode1.innerHTML = "<b> Enter Alphabets only...</b>";
        
        return false;
    }
    else{
        return true;
    }
}

let priceNode = document.getElementById("price");
let errNode2 = document.getElementById("err2");

function validateprice(){
    errNode2.innerHTML = "";
    let price = priceNode.value;

    let regexpress=new RegExp("^[+-]?([0-9]+\.?[0-9]*|\.[0-9]+)$");
    if(price===""){
        errNode2.innerHTML = "<b> This field is required.</b>";
        
        return false;
    }
    else if(regexpress.test(price)==false){
        errNode2.innerHTML = "<b> Enter numbers only...</b>";
       
        return false;
    }
    else{
        return true;
    }

}

let imgNode = document.getElementById("myimg");
let errNode3 = document.getElementById("err3");

function validateimg(){
    errNode3.innerHTML = "";
    let img = imgNode.value;

    
    if(img===""){
        errNode3.innerHTML = "<b> This field is required.</b>";
        
        return false;
    }
    else{
        return true;
    }

}



function validateform(){
    let s1 = validatenme();
    let s2 = validateprice()
    
    return (s1 && s2);
}

