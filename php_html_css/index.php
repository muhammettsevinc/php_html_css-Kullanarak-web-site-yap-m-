<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sevinç inşaat</title>
    <style>
      *{
    margin: 0;
    padding: 0;
}

*{
    margin: 0;
    padding: 0;
}
.container{
background-image: url(finall.webp);
height: 100vh;
background-size: 100% 100%;



}
.navbar{
    width: 100%;
    height: 86px;
    background-color: rgb(145, 145, 241);
 
          
  
          
       

            

   
  
}
.logo{
    display: inline-block;
    margin-left: 20px;
    margin-top: 5px;
    

   
    


  


    
   
   
}
.logo a{
    text-decoration: none;
    font-size: 30px;
    font-family: sans-serif;
    color: aliceblue;
    background-image: url(Sevinç.jpeg);
    background-size:100% 100% ;
 

    
    
}
.navbar ul{
    float:right;
    margin-right: 20px;

}
.navbar ul li{
    
    list-style: none;
    display: inline-block;
    margin:0 8px;
    line-height: 80px;
 
}

.navbar ul li a{
    text-decoration: none;
    color: white;
    font-size: 20px;
    padding: 6px 13px;
    font-family:Roboto;
    
    
}
.navbar ul li a.active,
.navbar ul li a:hover{
    background:#ff6e00;
    border-radius: 5px;
}

    
.center{
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%,-50%);
    user-select: none;
}
.center h1{
    color: black;
    font-size: 70px;
    font-weight: bold;
    width: 900px;
    text-align: center;
}



.center h2{
    color: white;
    font-size: 50px;
    font-weight: bold;
    width: 885px;
    text-align: center;
}
.buttons{
    text-decoration: none;
    margin: 35px, 280px;
    font-weight: bold;
    position: absolute;
    top: 150%;
    left: 50%;
    transform: translate(-50%,-50%);
   
   
    

}
   

.buttons input {
    text-decoration: none;
    height: 50px;
    width: 150px;
    font-size: 18px;
    font-weight: bold;
    color:white;
    background:rgba(245, 53, 5, 0.823);
    border: solid 1px red;
    cursor: pointer;
    outline: none;
    border-radius: 25px;
    transition: 3s;
}
   

   
    
    

    
   


.buttons input:hover{
    background:#fff;
    
}



    </style>

</head>
<body>
  <div class="container">
    <div class="navbar">
        <div class="logo">
    <a href= "Sevinç.jpeg" class="logo">.......
    <br>........
        
    </a> 
   
    
    </div>
    <ul>
        <li><a href="#" class="active">Ana sayfa</a></li>
        <li><a href="hakkımızda.php">Hakkımızda</a></li>
        <li><a href="hizmetler.php">Hizmetler</a></li>
        
        <li><a href="iletişim.php">İletişim</a></li> 
    </ul>
    </div>
    
      <div class="center">
      <h1>Sevinç Yapı Dekorasyon </h1>
      <h2>Hoş Geldiniz</h2>
      <div class="buttons">
        
        
        <a href="başvuruyap.php">
           
       <input type="button" value="Başvuru yap">
    </a>

      </div>
      
    </div>

  </div>
    
</body>
</html>