<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/search1.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Welcome</h2>
        <ul>
          <li><a href="/facultyhome"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="/profile"><i class="fas fa-user"></i>Profile</a></li>
          <li><a href="/othersfaculty"><i class="fas fa-address-card"></i>Others Faculty</a></li>
          <li><a href="/assignment"><i class="fas fa-project-diagram"></i>Assignment</a></li>
          <li><a href="/notes"><i class="fas fa-blog"></i>Notes</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Syllabus</a></li>
            <li><a href="#"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">

        <div class="header"> 
            <input type="text" name="" id = "empsearch" placeholder="Search By Day....">
            <input type="submit" name="" id ="empsearch1" placeholder="Type....">
        </div>  

   
        <div class="info">
         

       



     
        </div>
   
    </div>
    
</div>

  <script type="text/javascript">
    $("#empsearch").on("keyup",function(){
  
      var value = $(this).val();
      $("table tr").each(function(records)
      {
        if(records != 0)
        {
          var id = $(this).find("td:eq(1)").text();
          if(id.indexOf(value)!==0){
            $(this).hide();
          }
          else{
            $(this).show();
          }
        }
      });
    });
  </script>




</body>
</html><?php /**PATH F:\ATP3\Final\fall_2019_20_laravel\lar\resources\views/home/index.blade.php ENDPATH**/ ?>