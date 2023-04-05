<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    

    <?php if(session("success")): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?> </div>
    <?php endif; ?>
    <?php if(session("Delete")): ?>
    <div class="alert alert-danger"><?php echo e(session('Delete')); ?></div>
    <?php endif; ?>

    <div class="container" style="padding-left: 15rem">

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

    <div class="py-12" style="width: 850px ;height: 650px" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"  >
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" >
                <div class="container">
            
                    <div class="card-body">
                       <b>
                        <p class="my-2">User: <?php echo e($row->user->name); ?></p>
                    </b> 
                        <h5 class="card-text"><?php echo e($row->title); ?></h5>
                        <p class="card-text"><?php echo e($row->body); ?></p>
                       
                      </div>
                      <?php if(isset($row->service_image)): ?>
                      <div class="card mx-3 my-3">
                         
                          <img src="<?php echo e(asset('img/'.$row->service_image)); ?>" class="card-img-top" alt="...">
                             
                     </div>
                     <?php endif; ?> 
                     <p class=" float-end"><small class="text-muted"><?php echo e($row->created_at->diffForHumans()); ?></small></p>
                       <input type="text" name="" id=""  class="form-control" style="border-radius: 5px; margin:20px 0px 20px 0px" placeholder="Comment">
    
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Project_toppic/resources/views/adminpage/home.blade.php ENDPATH**/ ?>