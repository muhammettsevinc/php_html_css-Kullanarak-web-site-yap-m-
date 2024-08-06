<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    
    <style>
    

body{
    margin: 0;
    padding: 0;
    background:#131034;

}

*{
    margin: 0;
    padding: 0;
}

*{
    margin: 0;
    padding: 0;

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
    color: white;
    text-decoration: none;
    font-size: 20px;
    padding: 6px 13px;
    font-family:Roboto;
    
}
.navbar ul li a.active,
.navbar ul li a:hover{
    background:#ff6e00;
    border-radius: 5px;
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
.center.buttons{
    margin: 35px, 280px;
    font-weight: bold;
}
.buttons button{
    height: 50px;
    width: 150px;
    font-size: 18px;
    font-weight: bold;
    color: #ffb3b3;
    background:rgba(245, 53, 5, 0.823);
    border: solid 1px red;
    cursor: pointer;
    outline: none;
    border-radius: 25px;
    transition: 3s;
   
   

}
.buttons button:hover{
    background:#fff;
}
.hakkımızda h3{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 40px;
    text-align: center;
    color: white;

}



.navbar{
    width: 100%;
    height: 86px;
    background-color: rgb(145, 145, 241);
           
       

}
.sigunp-form{
    width: 300px;
    padding: 20px;
    text-align: center;
    background: url(tttp.jfif);
    position: absolute;
    top: 30%;
    transform: translate(-50% -50%);
    left: 40%;
    overflow: hidden;
    text-decoration: none;

}
.sigunp-form input{
    display: block;
    width: 100%;
    padding: 0 16px;
    height: 44px;
    text-align: center;
    box-sizing: border-box;
    border: none;

}
.txt{
    margin: 20px 0px;
    border-radius: 6px;
}
.sigunp-btn{
    margin-top: 60px;
    margin-bottom: 20px;
    background-color: #538fef;
    color: #fff;
    border-radius: 44px;
    cursor: pointer;
    transition: 0.8s;
    display: block;
    color: white;
    text-decoration: none;
  
}
.sigunp-btn:hover{
    transform: scale(0.96);
    background:#fff;
    color:#538fef
}
    </style>
</head>
<body>
   <div class="grup">
     <div class="navbar">
    <ul>
        <li><a href="index.php" >Ana sayfa</a></li>
        <li><a href="hakkımızda.php" >Hakkımızda</a></li>
        <li><a href="hizmetler.php">Hizmetler</a></li>
        
        <li><a href="#">İletişim</a></li> 
    </ul>
    </div>

       



    
       <div class="sigunp-form">
        <h1>Başvuru Yap</h1>
        <form action="başvuruyap.php" method="post">
        <input type="text"  name="isim" placeholder="Ad Soyad" class="txt">
        <input type="text" name="email" placeholder="E-mail" class="txt">
        <input type="number" name="tel" placeholder="Telefon Numarası" class="txt">
        <input type="text" name="işlem" placeholder="Yaptırmak istediğiniz işlem" class="txt">
      

      <div class="sigunp-btn">
         
         <input type="submit" placeholder="Başvuru yap" class="sigunp-btn">
              </a>
        
         
        </div>
        </form>
    

</body>
</html>
<?php
include("baglanti.php");    
if(isset($_POST["isim"],$_POST["email"],$_POST["tel"],$_POST["işlem"]))
{
    $adsoyad=$_POST["isim"];
    $email=$_POST["email"];
    $telefonno=$_POST["tel"];
    $işlem=$_POST["işlem"];

    $ekle="INSERT INTO kayit( adsoyad, email, telefonnumarası, yaptırmakistenilenislem)
     VALUES ('".$adsoyad."','".$email."','".$telefonno."','".$işlem."')";

     if($baglan->query($ekle)===true)
     {
        echo "<script>alert('Mesajınız başarı ile gönderilmiştir')</script>";

     }
     else
     {
        echo "<script>alert('Mesajınız gönderilirken bir hata oluştu')</script>";
     }
}
