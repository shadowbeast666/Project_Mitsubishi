var elpole1 = document.getElementById('pole1');
var elpole2 = document.getElementById('pole2');
var regMail = /^[a-z]{1}[\w|\.|\-]{0,30}@(\w{1,20}\.){1,7}[a-z]{1,3}$/i;
var elKomunikat = document.getElementById('komunikat');


function pole1(){
    var sprawdz = regMail.test(elpole1.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        elpole2.focus();
        elpole2.disabled = false;
           }else{
            elKomunikat.textContent = 'E-mail nie spełnia wymagań';
            elpole1.value = '';
            elpole1.focus();
            elpole2.value='';
        }
}
function pole2(){
if(elpole1.value != elpole2.value){
            elKomunikat.textContent = "Wartości pól nie zgadzają się !";
            elpole1.value = '';
            elpole2.value = '';
            elpole2.disabled = true;
        }
}

elpole1.addEventListener('blur', pole1);
elpole2.addEventListener('blur', pole2);