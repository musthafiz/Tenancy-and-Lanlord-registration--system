function goodbye(e) {
    if(!e) e = window.event;
    //e.cancelBubble is supported by IE - this will kill the bubbling process.
    e.cancelBubble = true;
    e.returnValue = 'You sure you want to leave?'; //This is displayed on the dialog

    //e.stopPropagation works in Firefox.
    if (e.stopPropagation) {
        e.stopPropagation();
        e.preventDefault();
    }
}
window.onbeforeunload='';

 function fileValidation(id) { 
            var fileInput =  
                document.getElementById(id); 
              
            var filePath = fileInput.value; 
          
            // Allowing file type 
            var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                alert('Invalid file type'); 
                fileInput.value = ''; 
                return false; 
            }  
      
        }



        function addclass(txt,on,classname){

          var d =document.getElementById(on);
          var e =document.getElementById(txt);

          if (e.value!="") { 
            d.classList.add(classname);
            }
            else{
                d.classList.remove(classname);
            }
         
        }