var elpole1 = document.getElementById('pole1');
var elpole2 = document.getElementById('pole2');
var elstare = document.getElementById('stare');
var regHaslo = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/;
var elKomunikat = document.getElementById('komunikat');

function stare(){
    var sprawdz1 = regHaslo.test(elstare.value);
    if(sprawdz1){
        elKomunikat.textContent = '';
        elpole1.disabled = false;
        elpole1.focus();
        
    }else{
        elKomunikat.textContent = 'Hasło nie spełnia wymagań';
        elstare.value = '';
        elpole1.value = '';
        elpole2.value = '';
        elpole1.disabled = true;
        elpole2.disabled = true;
        elstare.focus();
        
    }
}

function pole1(){
    var sprawdz = regHaslo.test(elpole1.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        elpole2.disabled = false;
        elpole2.focus();
           }else{
            elKomunikat.textContent = 'Hasło nie spełnia wymagań';
            elpole1.value = '';
            elstare.focus();
            elpole2.value='';
            elstare.value='';
        }
}

function pole2(){
if(elpole1.value != elpole2.value){
            elKomunikat.textContent = "Wartości pól nie zgadzają się !";
            elpole1.value = '';
            elpole2.value = '';
            elstare.value = '';
            elpole2.disabled = true;
            elstare.focus();
        }
}
elstare.addEventListener('blur', stare);
elpole1.addEventListener('blur', pole1);
elpole2.addEventListener('blur', pole2);