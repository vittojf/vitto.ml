
window.onscroll = function(){
   
     if(scrollY <= 150){
        document.getElementById('header').style.top='';
        document.getElementById('header').style.background='';
    }
    else {
        document.getElementById('header').style.top = '0';
        document.getElementById('header').style.background='rgba(5, 87, 158, 0.9)';
    }


    
}


