<!DOCTYPE html>
<html lang="en">
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <meta charset="UTF-8">
      <title>RSS Reader</title>
   </head>
   <body>
      
   
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Partners</a></li>
                  <li><a href="#">Contacts</a></li>
               </ul>
            </div>

         <div class="col-lg-10">
         <?php
               $rssUrl = "https://www.lavozdelafrontera.com.mx/rss.xml";
               $rssFeed = simplexml_load_file($rssUrl);
               if(!empty($rssFeed)){
                  foreach($rssFeed->channel->item as $item){
                     $title = $item->title;
                     $link = $item->link;
                     $description = $item->description;
                     echo  " <div class='card'>";
                     echo "<div class='card-body'>La voz de la frontera";
                     echo "<div><a href='" . $link . "'>" . $title . "</a></div>";
                     echo "<div><i>" . $description . "</i></div>";
                     echo "<div><mark>". $item->category."</mark>   ".$item->pubDate."</div> </div></div>";
                  }
               } 
            ?>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            </div>
         </div>
      </div>
   </body>
</html>

