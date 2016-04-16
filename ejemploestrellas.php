<html>
  <head>
    <title>Ejemplo de como crear un ranking de estrellas con jQuery</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <style>
          .stars{
              clear:both;
              float:left;
              width:160px;
            }
          .star{
                width: 30px;
                height:30px;
                background: url(image/stars.gif) top left no-repeat;
                float:left;
                margin-right: 2px;
            }
 
          .hover{
                background: url(image/stars.gif) center left no-repeat !important;
          }
          .point{
                background: url(image/stars.gif) bottom left no-repeat;
          }
          img{
            float:left;
          }
          .block{
            float:left;
            margin-left:10px;
            margin-bottom:10px;
          }
      </style>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.jsonp-2.1.4.js"></script>
    <script type="text/javascript" src="js/starsManager.js"></script>  
      <script>
        $(document).ready(function(){
            LKS.start();
        });
      </script>
    </head>
  <body>
  <h1>Como crear un ranking de estrellas usando jquery y jsonp</h1>
  <div style ="width:550px">
      <div class='block'>
          <img src='image/pic1.jpg' height="190px" width="225px" />
          <div class="stars" itemid="1"></div>
      </div>    
      <div class='block'>
          <img src='image/pic2.jpg' height="190px"  width="225px"/>
          <div class="stars" itemid="2"></div>
      </div>    
      <div class='block'>
          <img src='image/pic3.jpg' height="190px"  width="225px"/>
          <div class="stars" itemid="3"></div>
      </div>    
      <div class='block'>
          <img src='image/pic4.jpg' height="190px"  width="225px"/>
          <div class="stars" itemid="4"></div>
      </div>    
</div>
<div style="clear:both"></div>
  </body>
</html>