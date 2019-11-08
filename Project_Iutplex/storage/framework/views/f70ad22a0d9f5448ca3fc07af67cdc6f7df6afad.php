<?php $__env->startSection('content'); ?>
   <div class="jumbotron text-center">
      <h1>Welcome to IUTplex</h1><br>
      <p>IUTplex is a movie ticket management system where you can book your tickets online.</p>
      <p>New to here just register, its free.</p>
   </div>

   <hr>

   <ul>
      <?php $__currentLoopData = $slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <li class="list-group-items"><?php echo e($task); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </ul>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\Project_Iutplex\resources\views/Homepage.blade.php ENDPATH**/ ?>