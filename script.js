const toggle = document.getElementById('togglePassword');
const password = document.getElementById('password');
console.log(password)
toggle.addEventListener("click", function () {
    console.log("test")
    if(password.style.visibility==="visible"){
        password.style.visibility=  "hidden"
    }else {
        password.style.visibility = "visible"
    }
    
});