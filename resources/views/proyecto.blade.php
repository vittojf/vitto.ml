<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>


*{
    margin:none;
    padding:none;
    box-sizing:border-box;
    font-family:Arial;
}


body{
background: #00c6ff;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0072ff, #00c6ff);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0072ff, #00c6ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
  .boxs, .b1{
    position:relative;
    height:300px;
    width:30%;
    background:white;
    color:black;

    margin:5% auto;
    border-radius:10px 10px 10px 10px;
    text-align:center;
    transition:all 300ms;
    font-weight:bold;
    color:black;
}



.ch{   
margin:auto;
width:90%;
text-align:left;
font-weight:bold;
}


.b1{
height:600px;
}

.ch input{
    font-size:11pt;
    display:block;
    border-style:none;
    margin: 10px 0;
    padding-left:5px;
    height:35px;
    width:100%;
       background: gray;

    border-radius:5px 5px 5px 5px; 
   
   

}
::-webkit-input-placeholder { 
    font-weight:bold;
    color: white; 
    } 


input[type="submit"]{
    margin: 5% 0;
    background:	RGB(0, 250, 154);
    cursor:pointer;
    text-align:center;
}
input[type="submit"]:hover{
    background: RGB(60, 179, 113);
}
</style>

<body>
@yield('div')
@yield('seccion')
<div class="ch">
<form>
@yield('inc')
</form>

</div>
@yield('anc')
</div>




</body>
</html>