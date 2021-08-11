
let nameNode = document.getElementById("name");
let errNode1 = document.getElementById("err1");

function validatename(){
    errNode1.innerHTML = "";
    nameNode.style.border = "2px green solid";
    nameNode.style.backgroundColor = "cyan";
    let name = nameNode.value;
    
    let regexpress=new RegExp("^([a-zA-Z])*$");
    if(name===""){
        errNode1.innerHTML = "<b> This field is required.</b>";
        nameNode.style.border = "2px red solid";
        nameNode.style.backgroundColor = "pink";
        return false;
    }
    else if(regexpress.test(name)==false){
        errNode1.innerHTML = "<b> Enter Alphabets only...</b>";
        nameNode.style.border = "2px red solid";
        nameNode.style.backgroundColor = "pink";
        return false;
    }
    else{
        return true;
    }
}


function validateform(){
    let s1 = validatenme();
    
    return (s1);
}

