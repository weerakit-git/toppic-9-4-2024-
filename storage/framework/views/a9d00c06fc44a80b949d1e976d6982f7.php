<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <?php if($title == null): ?>
       <h1>no post</h1> 
    <?php endif; ?>

    <?php if(session("success")): ?>
    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if(session("Delete")): ?>
    <div class="alert alert-danger"><?php echo e(session('Delete')); ?></div>
    <?php endif; ?>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width:10%">Title</th>
                        <th scope="col" style="width:45%">Content</th>
                        <th scope="col" style="width:15%">Image</th>
                        <th scope="col">Time</th>
                        <th scope="col">Post By</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>

                      </tr>
                    </thead>
                    <?php if(isset($title)): ?>
                    <tbody>
                        <?php ($i=1); ?>
                        <?php $__currentLoopData = $title; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                            
                            <th><?php echo e($i++); ?></th>
                            <td><?php echo e($row->titel); ?></td>
                            <td ><?php echo e($row->body); ?></td>
                            <td>
                             <?php if(isset($row->service_image)): ?>  
                                 <img src="<?php echo e(asset('img/'.$row->service_image)); ?>" class="card-img-top" style="width: 150px" alt="...">      
                            <?php endif; ?> 
                            </td>
                            <td><?php echo e($row->created_at->diffForHumans()); ?></td>
                            <td><?php echo e($row->user->name); ?></td>
                            <td>
                                <a href="<?php echo e(url('/page/edit/'.$row->id)); ?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo e(url('/page/delete/'.$row->id)); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                     
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       

                       
                     </tbody>
                  
                    <?php endif; ?>

                   
                            
                  </table>


               
        
                 
            </div>
        </div>
       
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Project_toppic/resources/views/dashboard.blade.php ENDPATH**/ ?>