const btn = document.querySelector("#btn");
const nom = document.querySelector("#Nom");
const pswd = document.querySelector("#password");
const confpsswd = document.querySelector("#conpassword");
const msg2 = document.querySelector(".msg2");
const msg1 = document.querySelector(".msg1");

btn.addEventListener("click",validation_insc)
function validation_insc(e) {
   
    if(pswd.value!=confpsswd.value){
        e.preventDefault();
        
        msg2.classList.add("error");
        msg2.innerHTML="Les mots de passe ne correspondent pas";
        setTimeout(()=>msg2.remove() , 1000);
    }


    
    
    }
    pswd.addEventListener('click',validationpswd);
    function validationpswd (e){
        
        msg1.classList.add("error");
        msg1.innerHTML="le mot de passe doit contenir (6-8) de [A-Z] et [1-9]";
        setTimeout(()=>msg1.remove() , 2000);
        
    }
//e.preventDefault();

