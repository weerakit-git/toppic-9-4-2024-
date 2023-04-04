<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="container">
            <div class="row">
                 <div class="card">
                   <div class="card-body ">
                           <form action="<?php echo e(route('addpost')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>   
                                    <div>
                                        <label for="Title">Title</label>
                                        <input type="text" class="form-control" name="title_name">
                                            <?php $__errorArgs = ['title_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                     <div>
                                        
                                        <label for="content" class="mt-3">Content</label>
                                        <br>
                                        <textarea name="body_name" rows="10" cols="120" class="form-control"></textarea>
                                        <br>
                                     </div>
                                   
                                    <div class="flex ">
                                                <label for="service_image" class="mx-2">Uplode</label>
                                                  <input type="file" class="form-control" name="service_image">
                                    </div>
                                    <div class="float-end">
                                        <input type="submit" style="background-color:rgb(27, 145, 212);padding:10px 15px;cursor:pointer;border-radius:7px;color: white;" class="mt-4"></input>
                                    </div>
                           </form>
                       </div>
                   </div>
           </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Project_toppic/resources/views/adminpage/index.blade.php ENDPATH**/ ?>