<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <style>
      body{
        background-color: #3498d8;
      }
      .slider{
        margin: 50px auto;
        width: 600px;
      }
      div{
        height: 100%;
      }
      p{
        text-align: center;
        font-size: 12px;
        color: white;
      }
    </style>
  </head>
  <body>
    <div class="slider">
      <div>
        <img src="images/account.png" />
        <p>Caption 1</p>
      </div>
      <div>
        <img src="images/automobiles.png" />
        <p>Caption 2</p>
      </div>
      <div>
        <img src="images/fashn.png" />
        <p>Caption 3</p>
      </div>
      <div>
        <img src="images/catimg.png" />
        <p>Caption 4</p>
      </div>
      <div>
        <img src="images/automobiles.png" />
        <p>Caption 5</p>
      </div>
      <div>
        <img src="images/fashn.png" />
        <p>Caption 6</p>
      </div>
    </div>
        
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.slider').slick({
          centerMode: true,
          centerPadding: '60px',
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1
        });
      });
    </script>
  </body>
</html>