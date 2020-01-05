<!DOCTYPE html>
<html>
<head>
	<title>pdf</title>
</head>
<body>

	 <table id="t1" style="width:100%" border="1">
       <!--   <table border="1" style="width:100%"> -->
          <tr id = "heading">
              <td>Student ID</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Cgpa</td>
              <td>Course</td>
              <td>Email</td>
              
            
         </tr>


<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($std->studentid); ?></td>
      <td><?php echo e($std->firstname); ?></td>
      <td><?php echo e($std->lastname); ?></td>
      <td><?php echo e($std->cgpa); ?></td>
      <td><?php echo e($std->coursename); ?></td>
      <td><?php echo e($std->email); ?></td>
      <!-- <td><?php echo e($std->password); ?></td> -->
      
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



 
  </table>

</body>
</html><?php /**PATH F:\ATP3\Final\finalProject\lar\resources\views/pdf.blade.php ENDPATH**/ ?>