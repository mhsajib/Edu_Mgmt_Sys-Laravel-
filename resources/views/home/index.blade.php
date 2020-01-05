<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/search1.css">
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
        <h2>Welcome</h2>
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
            <input type="text" name="" id = "empsearch" placeholder="Search....">
            <input type="submit" name="" id ="empsearch1" placeholder="Type....">
        </div>  

   
        <div class="info">
         
         <table id="t1" style="width:60%">
       <!--   <table border="1" style="width:100%"> -->
          <tr id = "heading">
              <td>COURSE ID</td>
              <td>DAY</td>
              <td>TIME</td>
              <td>COURSE NAME</td>
            
         </tr>

 <!--    <% for(var i=0; i< user.length; i++){ %>
    <tr>
            <td><%= user[i].id %></td>
            <td><%= user[i].day %></td>
            <td><%= user[i].time %></td>
            <td> <a href="/courses/<%= user[i].name %>"><%= user[i].name %></a></td>
     
    </tr>

  <% } %> -->

@foreach($users as $std)
    <tr>
      <td>{{ $std->courseId }}</td>
      <td>{{ $std->courseDay }}</td>
      <td>{{ $std->courseTime }}</td>
      <!-- <td>{{ $std->password }}</td> -->
      <td>
         <button style="background-color: #7E99C5; padding: 12px 20px;border-radius: 8px;"><a href="{{ route('student.list', $std->courseName) }}" style="color: white">{{ $std->courseName }}</a></button>
      </td>
    </tr>
  @endforeach



 
  </table>
       



     
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