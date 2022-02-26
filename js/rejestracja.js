var elImie = document.getElementById('imie');
var elNazwisko = document.getElementById('nazwisko');
var elLogin = document.getElementById('login');
var elMail1 = document.getElementById('mail1');
var elMail2 = document.getElementById('mail2');
var elHaslo = document.getElementById('haslo');
var elHaslo2 = document.getElementById('haslo2');
var elData = document.getElementById('data');
var elRegulamin = document.getElementById('regulamin');
var elPrzycisk = document.getElementById('przycisk');
var elPopraw = document.getElementById('popraw');
var elKomunikat = document.getElementById('komunikat');
var regImie = /^[a-ząęćżźółśń]{2,32}$/i;
var regNazwisko = /^[a-ząęćżźółśń]{2,32}(\-[a-ząęćżźółśń]{2,32})?$/i;
var regLogin = /^[a-z0-9]{1}[\w\.\-]{4,30}[a-z0-9]{1}$/i;
var regMail = /^[a-z]{1}[\w|\.|\-]{0,30}@(\w{1,20}\.){1,7}[a-z]{1,3}$/i;
var regHaslo = /^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W\_]).{8,35})$/;


elKomunikat.style.color = 'red';
elKomunikat.style.textAlign = 'center';

function sprawdzImie(){
    var sprawdz = regImie.test(this.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        var imie = this.value[0].toUpperCase() + this.value.slice(1).toLowerCase();
        elImie.value = imie;
    }else{
        elKomunikat.textContent = "Błędne imie";
        this.focus();
    }
}

function sprawdzNazwisko(){
    var sprawdz = regNazwisko.test(this.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        var i=0;
        while(i<this.value.length){
            if(i==0)
            var nazwisko = this.value[i].toUpperCase();
            else{
                if(this.value[i]=='-'){
                    nazwisko += this.value[i] + this.value[i+1].toUpperCase();
                    i++;
                }else{
                    nazwisko += this.value[i].toLowerCase();
                }
            }
            i++;
        }
        elNazwisko.value = nazwisko;
    }else{
        elKomunikat.textContent = "Błędne nazwisko";
        this.focus();
    }
}

function sprawdzLogin(){
    var sprawdz = regLogin.test(this.value);
    if(sprawdz){
        elKomunikat.textContent = '';
    }else{
        elKomunikat.textContent = "Błędny login";
        this.focus();
    }
}

function blokujMail(){
    var sprawdz = regMail.test(elMail1.value);
    if(sprawdz){
        elKomunikat.textContent = '';
        elMail2.focus();
        }else{
            elKomunikat.textContent = 'Mail nie spełnia wymagań';
            elMail1.focus();
        }
}

function mail(){
    if(elMail1.value != this.value){
        //rozne
        elKomunikat.textContent = "Różne maile";
        elMail1.value = '';
        this.value = '';
        this.disabled = true;
        elMail1.disabled = false;
        elMail1.focus();
        elMail2.disabled = false;
        
    }else{
        //takie same
        elKomunikat.textContent = '';
        
        
    }
}

function blokujHaslo(){
    var sprawdz = regHaslo.test(elHaslo.value);
    if(sprawdz){
        elHaslo2.focus();
        elKomunikat.textContent = ''
    }else{
        elKomunikat.textContent = 'Hasło nie spełnia wymagań';
        elHaslo.focus();
    }
}
function haslo(){
    if(elHaslo.value != this.value){
        elKomunikat.textContent = "Różne hasla";
        elHaslo.value = '';
        this.value = '';
       
        elHaslo.focus();
        
    }
}

function regulamin(){
    var xd = regMail.test(elMail1.value);
    var xd1 = regHaslo.test(elHaslo.value);
    var xd2 = regLogin.test(elLogin.value);
    var xd3 = regImie.test(elImie.value);
    var xd4 = regNazwisko.test(elNazwisko.value);
    var lol = elData.value;


    if(elRegulamin.checked && xd3 >0 && xd4 >0 && xd >0 && xd1 >0){
        if(xd2 >0 && lol != ""){
            elPrzycisk.disabled = false;
        }else{
            elPrzycisk.disabled = true;
        }
    
        }
}
        


function popraw(){
    var zablokowane = document.querySelectorAll('input[disabled]');
    if(zablokowane.length > 0){
        for(var i = 0; i < zablokowane.length; i++){
            zablokowane[i].disabled = false;
        }
    }
}

elImie.addEventListener('blur', sprawdzImie);
elNazwisko.addEventListener('blur', sprawdzNazwisko);
elLogin.addEventListener('blur', sprawdzLogin);
elMail1.addEventListener('blur', blokujMail);
elMail2.addEventListener('blur', mail);
elHaslo.addEventListener('blur', blokujHaslo);
elHaslo2.addEventListener('blur', haslo);
elRegulamin.addEventListener('click', regulamin);
elPopraw.addEventListener('click', popraw);