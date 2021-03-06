<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment</title>
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
            <!-- <input type="text" name="" id = "empsearch" placeholder="Search By Day....">
            <input type="submit" name="" id ="empsearch1" placeholder="Type...."> -->
        </div>  

   
        <div class="info">
         
         <table id="t1" style="width:80%">
       <!--   <table border="1" style="width:100%"> -->
          <tr id = "heading">
              <td>Assignment Name</td>
              <td>Course Name</td>
              <td>Update Date</td>
              <td>Submission Date</td>
              <td>File</td>
              <td>Action</td>
            
         </tr>

 <!--    <% for(var i=0; i< user.length; i++){ %>
    <tr>
            <td><%= user[i].id %></td>
            <td><%= user[i].day %></td>
            <td><%= user[i].time %></td>
            <td> <a href="/courses/<%= user[i].name %>"><%= user[i].name %></a></td>
     
    </tr>

  <% } %> -->

<?php $__currentLoopData = $assignment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($std->assignmentname); ?></td>
      <td><?php echo e($std->coursename); ?></td>
      <td><?php echo e($std->updatedate); ?></td>
      <td><?php echo e($std->submissiondate); ?></td>
      <td><?php echo e($std->assignmentfile); ?></td>
      <!-- <td><?php echo e($std->password); ?></td> -->
      <td>
         <button style="background-color: #7E99C5; padding: 12px 20px;border-radius: 8px;"> <a href="<?php echo e(route('assignment.edit', $std->id)); ?>">EDIT</a></button>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



 
  </table>
       



     
        </div>
   
    </div>
    
</div>

 <!--  <script type="text/javascript">
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
 -->



</body>
</html><?php /**PATH F:\ATP3\Final\finalProject\lar\resources\views/assignment/show.blade.php ENDPATH**/ ?>