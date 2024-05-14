<?php if (isset($component)) { $__componentOriginal59fca5adad3f44c17f9847442ff25a5c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal59fca5adad3f44c17f9847442ff25a5c = $attributes; } ?>
<?php $component = App\View\Components\AdminLayouts::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AdminLayouts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <form method="POST" action="<?php echo e(route('positions.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h5 class="card-title mb-0">Input</h5>
                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control" placeholder="Input" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal59fca5adad3f44c17f9847442ff25a5c)): ?>
<?php $attributes = $__attributesOriginal59fca5adad3f44c17f9847442ff25a5c; ?>
<?php unset($__attributesOriginal59fca5adad3f44c17f9847442ff25a5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59fca5adad3f44c17f9847442ff25a5c)): ?>
<?php $component = $__componentOriginal59fca5adad3f44c17f9847442ff25a5c; ?>
<?php unset($__componentOriginal59fca5adad3f44c17f9847442ff25a5c); ?>
<?php endif; ?><?php /**PATH D:\Laravel\New folder (2)\resources\views/admin/position/create.blade.php ENDPATH**/ ?>