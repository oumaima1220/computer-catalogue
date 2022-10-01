<!DOCTYPE html>
<html>
  <head>
    <title>Microsoft laptop avec avantage de surface</title>
    <link href="f2.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	body{
      margin: 0;
      font-family:Nunito Sans;
      }
      h3{
      text-align: center;
      font-size: 30px;
      margin: 0;
      padding-top: 10px;
      }
      a{
      text-decoration: none;
      }
      .gallery{
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      justify-content: center;
      align-items: center;
      margin: 50px 0;
      }
      .content{
      width: 24%;
      margin: 15px;
      box-sizing: border-box;
      float: left;
      text-align: center;
      border-radius:10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      padding-top: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: .4s;
      }
      .content:hover{
      box-shadow: 0 0 11px rgba(33,33,33,.2);
      transform: translate(0px, -8px);
      transition: .6s;
      }
      img{
      width: 200px;
      height: 200px;
      text-align: center;
      margin: 0 auto;
      display: block;
      }
      p{
      text-align: center;
      color: #b2bec3;
      padding: 0 8px;
      }
      h6{
      font-size: 26px;
      text-align: center;
      color: #222f3e;
      margin: 0;
      }
      ul{
      list-style-type: none;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 0px;
      }
      li{
      padding: 5px;
      }
      .fa{
      color: #ff9f43;
      font-size: 26px;
      transition: .4s;
      }
      .fa:hover{
      transform: scale(1.3);
      transition: .6s;
      }
      button{
      text-align: center;
      font-size: 24px;
      color: #fff;
      width: 100%;
      padding: 15px;
      border:0px;
      outline: none;
      cursor: pointer;
      margin-top: 5px;
      border-bottom-right-radius: 10px;
      border-bottom-left-radius: 10px;
      }
      .buy-1{
      background-color: #6495ED;
      }
      .buy-2{
      background-color: #B22222;
      }
      .buy-3{
      background-color: #FFC0CB;
      }
      @media(max-width: 1000px){
      .content{
      width: 46%;
      }
      }
      @media(max-width: 750px){
      .content{
      width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <div class="gallery">
      <div class="content">
        <img src="PC.png">
        <h3>NOUVEAU <br>Surface Laptop 4</h3>
        <p>Fin et élégant, notre ultraportable avec écran tactile 13,5 ou 15 pouces</p>
        <h6>Prix de départ : 1 129,00 €</h6>
        <ul>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
        </ul>
        <button class="buy-1">DÉCOUVRIR LE SURFACE LAPTOP 4</button>
      </div>
      <div class="content">
        <img src="PC1.png">
        <h3>Surface Pro 7</h3>
        <p>Puissante comme un PC, portable comme une tablette, avec un écran tactile de 12,3 pouces</p>
        <h6>Prix de départ : 850,00 €</h6>
        <ul>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
        </ul>
        <button class="buy-2">DÉCOUVRIR SURFACE PRO 7</button>
      </div>
      <div class="content">
        <img src="PC2.png">
        <h3>Surface Laptop Go</h3>
        <p>Élégant, léger et efficace, avec un écran tactile de 12,4 pouces</p>
        <h6>Prix de départ : 629,00 €</h6>
        <ul>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
          <li><i class="fa fa-star" aria-hidden="true"></i></li>
        </ul>
        <button class="buy-3">DÉCOUVRIR SURFACE LAPTOP GO</button>
      </div>
    </div>
  </body>
</html>