<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assignment</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/search1.css">
  <link rel="stylesheet" href="/css/formStyle.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <style>
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
  
  </style>

</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2></h2>
        <ul>
          <li><a href="/home"><i class="fas fa-home"></i>Home</a></li>
          <li><a href="/profile"><i class="fas fa-user"></i>Profile</a></li>
          <li><a href="/othersfaculty"><i class="fas fa-address-card"></i>Others Faculty</a></li>
          <li><a href="/assignment"><i class="fas fa-project-diagram"></i>Assignment</a></li>
          <li><a href="/notes"><i class="fas fa-blog"></i>Notes</a></li>
            <li><a href="/syllabus"><i class="fas fa-address-book"></i>Syllabus</a></li>
            <li><a href="/logout"><i class="fas fa-map-pin"></i>Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">
      <div class="header"> 
            <!-- <input type="text" name="" id = "empsearch" placeholder="Search By Day....">
            <input type="submit" name="" id ="empsearch1" placeholder="Type...."> -->
            <br>
        </div>

      <h2 style="text-align: center; padding: 15px;"><u>ASSIGNMENT </u></h2>

       <h2 style="color: blue;text-align: center;">  {{session('msg')}}</h2>

          <div class="div1" id= "div1">
         

          <!-- ************* <div><button>hello</button><button>hello</button></div>  -->
         <!-- <div><button>hello</button></div> -->
         <form method="post"  enctype="multipart/form-data">
          <!--   <label for="fname">Assignment Name</label> -->
        
            <input type="text" id="fname" name="assignmentname" placeholder="Name..">
<!-- 
            <label for="fname">Course Name</label> -->
            <input type="text" id="fname" name="coursename" placeholder="Course..">
        <!-- 
            <label for="fname">Upload Date</label> -->
            <input type="date" id="fname" name="updatedate" placeholder="Your last name..">
        
            <!-- <label for="country">Country</label>
            <select id="country" name="country">
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select> -->

            <!-- <label for="fname">Submission Date</label> -->
            <input type="date" id="fname" name="submissiondate" placeholder="Your last name..">

            <!-- <label for="fname">Assignment File</label> -->
            <input type="file" id="fname" name="assignmentfile" placeholder="Your last name..">
          
            <input type="submit" id = "fname" value="ADD" style="background: #0078D7; border-radius: 12px">
           
          </form>

          <a href="/assignment/show"><input type="submit" id = "fname" value="Show/Edit" style="background: #5BB55B; border-radius: 12px"></a>
 
        
           <div>
               @foreach($errors->all() as $err)
               <p style="color: red">{{'*'.$err}}</p> 
               @endforeach

              
          </div>




     
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
</html>