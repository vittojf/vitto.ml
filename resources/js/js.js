
window.onscroll = function(){
     if(scrollY <= 150){
        document.getElementById('headers').style.top='';
        document.getElementById('headers').style.background='';
    }
    else {
        document.getElementById('headers').style.top = '0';
        document.getElementById('headers').style.background='rgba(5, 87, 158, 0.9)';
    }


    
}


