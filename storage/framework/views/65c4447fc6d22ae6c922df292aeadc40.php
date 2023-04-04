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
             
                
                    show data
                 
               
                <a href="<?php echo e(url('/page/show/')); ?>" class="btn btn-primary">Edit</a>
                img
                <img src="http://127.0.0.1:8003/public/img/private/var/folders/94/xdz3k_6j1hb86dykqcvrjfdh0000gn/T/phpRejHq7" alt="">
                   <img src="/private/var/folders/94/xdz3k_6j1hb86dykqcvrjfdh0000gn/T/phpRejHq7" alt="">
                 
           </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/Project_toppic/resources/views/adminpage/home.blade.php ENDPATH**/ ?>