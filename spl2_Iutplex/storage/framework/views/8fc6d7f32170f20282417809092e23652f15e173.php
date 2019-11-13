<?php $__env->startSection('title'); ?>
   movie info
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <div class="container">
      <h1>add movie</h1>
   </div>



   <form method="post"  action="<?php echo e(route('movie-info-submit')); ?>">
       <?php echo csrf_field(); ?>


       <div class="form-group">

           <label for="name">Movie Name</label>
           <input type="text" class="form-control" name="name" id="name" >

       </div>

       <div class="form-group">

           <label for="Directorname">Director name</label>
           <input type="text" class="form-control" name="Directorname" id="Directorname" >

       </div>

       <div class="form-group">

           <label for="Duration">Duration</label>
           <input type="text" class="form-control" name="Duration" id="Duration" >

       </div>

       <div class="form-group">

           <label for="Description">Description</label>
           <input type="text" class="form-control" name="Description" id="Description" >

       </div>












  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spl2_Iutplex\resources\views/addMovie.blade.php ENDPATH**/ ?>