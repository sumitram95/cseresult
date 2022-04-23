window.addEventListener('load', () =>{
    const params = (new URL(document.location)).searchParams;
    const name = params.get('roll');
    if(name == "191810800003"){
      /* function data(){
           var b = document.getElementById('second');
           b.src = "/cse/image/ANJIT5SEM.png";
        }
        data();*/

   var newImg = document.getElementById('first');
   newImg.src = "./image/ANJIT1SEM.png";
   var n = document.getElementById('second');
   n.src = "./image/ANJIT5SEM.png";
   var a1 = document.getElementById('a1');
   a1.href = "./image/ANJIT1SEM.png";
   var a2 = document.getElementById('a2');
   a2.href = "./cse/image/ANJIT5SEM.png";
    }
    else if(name == "191810800004"){
     var newImg = document.getElementById('first');
     newImg.src = "./cse/image/ANKIT1SEM.png";
     var n = document.getElementById('second');
     n.src = "./cse/image/ANKIT3SEM.png";
     var a1 = document.getElementById('a1');
     a1.href = "./cse/image/ANKIT1SEM.png";
     var a2 = document.getElementById('a2');
     a2.href = "./cse/image/ANKIT3SEM.png";
      }
      else if(name == "191810800016"){
        var newImg = document.getElementById('first');
        newImg.src = "./cse/image/MANOJ1SEM.png";
        var n = document.getElementById('second');
        n.src = "./cse/image/MANOJ3SEM.png";
        var a1 = document.getElementById('a1');
        a1.href = "/cse/image/MANOJ1SEM.png";
        var a2 = document.getElementById('a2');
        a2.href = "./cse/image/MANOJ3SEM.png";
         }
         else if(name == "191810800018"){
            var newImg = document.getElementById('first');
            newImg.src = "./cse/image/MUKESH1SEM.png";
            var n = document.getElementById('second');
            n.src = "./cse/image/MUKESH5SEM.png";
            var a1 = document.getElementById('a1');
            a1.href = "./cse/image/MUKESH1SEM.png";
            var a2 = document.getElementById('a2');
            a2.href = "./cse/image/MUKESH5SEM.png";
             }
             else if(name == "191810800021"){
                var newImg = document.getElementById('first');
                newImg.src = "./cse/image/NITESH5SEM.png";
                var n = document.getElementById('second');
                n.src = "./cse/image/NITESH5SEM.png";
                n.style.display = "none"
                var a1 = document.getElementById('a1');
                a1.href = "./cse/image/NITESH5SEM.png";
                a1.style.display = "none";
                var a2 = document.getElementById('a2');
                a2.href = "./cse/image/NITESH5SEM.png";
                 }
                 else if(name == "191810800031"){
                    var newImg = document.getElementById('first');
                    newImg.src = "./cse/image/santoshmahato1sem.png";
                    var n = document.getElementById('second');
                    n.src = "./cse/image/santoshmahato5sem.png";
                    var a1 = document.getElementById('a1');
                    a1.href = "./cse/image/santoshmahato1sem.png";
                    
                    var a2 = document.getElementById('a2');
                    a2.href = "./cse/image/santoshmahato5sem.png";
                     }
                     else if(name == "192390800033"){
                        var newImg = document.getElementById('first');
                        newImg.src = "./cse/image/SANOJ1SEM.png";
                        var n = document.getElementById('second');
                        n.src = "./cse/image/SANOJ5SEM.png";
                        var a1 = document.getElementById('a1');
                        a1.href = "./cse/image/SANOJ1SEM.png";
                        var a2 = document.getElementById('a2');
                        a2.href = "./cse/image/SANOJ5SEM.png";
                    }

    else{
        var newImg = document.getElementById('first');
        newImg.src = "./cse/image/SANOJ1SEM.png";
        newImg.style.display = "none";
        var n = document.getElementById('second');
        n.src = "./cse/image/SANOJ5SEM.png";
        n.style.display = "none"
        var a1 = document.getElementById('a1');
        a1.innerHTML = "Not Matched In Database...";
        a1.style.bottom ="345px";
        a1.style.left ="70px";


        var a2 = document.getElementById('a2');
        a2.innerHTML = "Back";
        a2.href = "./cse/index.html";
        a2.style.left = "140px";

        

    }

});