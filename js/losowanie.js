        (function() {
            var quotes1 = [
        {
            link: "http://www.mitsubishi.pl/strona/528",
            text: "ASX 2017",
            img:  "./images/asx17.png",
        },
        {
            link: "http://www.mitsubishi.pl/strona/558",
            text: "ASX 2018",
            img:  "./images/asx18.png",
        },
           {
            link: "http://www.mitsubishi.pl/strona/515",
            text: "Outlander",
            img:  "./images/out17.png",
        },
          {
            link: "http://www.mitsubishi.pl/strona/480",
            text: "L200",
            img:  "./images/l200.jpg",
        },
          {
            link: "http://www.mitsubishi.pl/dlaczego-warto/Pajero-5D",
            text: "Pajero 5D",
            img:  "./images/5d.png",
        },
          {
            link: "http://www.mitsubishi.pl/strona/275",
            text: "i-MiEV",
            img:  "./images/m.jpg",
        }
          ];
        var quotes3 = [
            
          {
            link: "https://www.otomoto.pl/osobowe/mitsubishi/lancer-evolution-x/",
            text: "Evolution X",
            img:  "./images/evox.png",
        },
          {
            link: "https://www.otomoto.pl/osobowe/mitsubishi/eclipse/",
            text: "Eclipse",
            img:  "./images/ec.png",
        },
          {
            link: "https://www.autocentrum.pl/dane-techniczne/mitsubishi/fto/l/",
            text: "FTO",
            img:  "./images/fto.png",
        },
          {
            link: "https://www.olx.pl/motoryzacja/samochody/mitsubishi/colt/",
            text: "Colt",
            img:  "./images/colt.png",
        },
          {
            link: "http://www.batfa.com/newcar-mitsubishi-dignity.htm",
            text: "Dignity",
            img:  "./images/dig.jpg",
        },
          {
            link: "https://www.autocentrum.pl/dane-techniczne/mitsubishi/galant/viii/sedan/silnik-benzynowy-2.5-i-vr-4-type-v-4wd-280km-1997-2006/",
            text: "Galant",
            img:  "./images/gal.png",
        }
            ];
          
      
        var quotes2 = [
             {
            link: "https://nowyeclipsecross.mitsubishi.pl/",
            text: "Eclipse C",
            img:  "./images/eclipsec.png",
        },
          {
            link: "http://www.mitsubishi-motors.com/en/products/?intcid2=megadrop_products",
            text: "Sportback",
            img:  "./images/sportback.png",
        },
          {
            link: "http://www.mitsubishi-motors.com/en/products/?intcid2=megadrop_products",
            text: "MINICAB",
            img:  "./images/miev.jpg",
        },
          {
            link: "https://www.autocentrum.pl/dane-techniczne/mitsubishi/endeavor/",
            text: "Endeavor",
            img:  "./images/end.jpg",
        },
          {
            link: "https://www.otomoto.pl/osobowe/mitsubishi/3000-gt/",
            text: "GTO",
            img:  "./images/Mitsubishi_3000GT.png",
        },
          {
            link: "https://www.mitsubishi.pl/business-contract/",
            text: "Pajero",
            img:  "./images/paj.png",
        }
            
        ]
        
        var quote1 = quotes1[Math.floor(Math.random() * quotes1.length)];
        var quote2 = quotes2[Math.floor(Math.random() * quotes2.length)];
        var quote3 = quotes3[Math.floor(Math.random() * quotes3.length)];
        
        document.getElementById("zdja").innerHTML =
        quote1.text;
        
       document.getElementById("zdj1").innerHTML =
           '<a href="' + quote1.link + '">' + '<img src="' + quote1.img + '"></a>';
        
        document.getElementById("zdjb").innerHTML =
        quote2.text;
        
       document.getElementById("zdj2").innerHTML =
           '<a href="' + quote2.link + '">' + '<img src="' + quote2.img + '"></a>';
        
         document.getElementById("zdjc").innerHTML =
        quote3.text;
        
       document.getElementById("zdj3").innerHTML =
           '<a href="' + quote3.link + '">' + '<img src="' + quote3.img + '"></a>';
        
       
    })();
            
