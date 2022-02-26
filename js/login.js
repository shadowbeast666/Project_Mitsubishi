var elLogin1 = document.getElementById('login1');
var elLogin2 = document.getElementById('login2');
var regLogin = /^[a-z0-9]{1}[\w\.\-]{4,30}[a-z0-9]{1}$/i;
var elKomunikat = document.getElementById('komunikat');


function login1(){
    var sprawdz = regLogin.test(elLogin1.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        elLogin2.focus();
        elLogin2.disabled = false;
           }else{
            elKomunikat.textContent = 'Login nie spełnia wymagań';
            elLogin1.value = '';
            elLogin1.focus();
            elLogin2.value='';
        }
}
function login2(){
if(elLogin1.value != elLogin2.value){
            elKomunikat.textContent = "Wartości pól nie zgadzają się !";
            elLogin1.value = '';
            elLogin2.value = '';
            elLogin2.disabled = true;
        }
}

elLogin1.addEventListener('blur', login1);
elLogin2.addEventListener('blur', login2);