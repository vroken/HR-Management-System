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
        <div class="col-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h1 class="card-title mb-0">Tambahkan Absensi</h1>
                </div>
                
                <div class="row m-2">
                    <div class="modal-body">
                        <form method="POST" action="<?php echo e(route('absensi.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <label for="name" class="mb-2">Judul Absensi</label>
                                        <input type="text" class="form-control mb-3 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="name" value="<?php echo e(old('name')); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        
                                        <label for="description" class="mb-2">Deskripsi</label>
                                        <input type="text" class="form-control mb-3 <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="description" value="<?php echo e(old('description')); ?>">
                                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <small class="invalid-feedback">
                                                <?php echo e($message); ?>

                                            </small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
    
                                    
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="start_time">Waktu Absen Masuk</label>
                                            <input type="time" class="form-control <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="start_time" value="<?php echo e(old('start_time')); ?>">
                                            <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="batas_start_time">Batas Absen Masuk</label>
                                            <input type="time" class="form-control <?php $__errorArgs = ['batas_start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="batas_start_time" value="<?php echo e(old('batas_start_time')); ?>">
                                            <?php $__errorArgs = ['batas_start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="end_time">Waktu Absen Keluar</label>
                                            <input type="time" class="form-control <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="end_time" value="<?php echo e(old('end_time')); ?>">
                                            <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label for="batas_end_time">Batas Absen Keluar</label>
                                            <input type="time" class="form-control <?php $__errorArgs = ['batas_end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="batas_end_time" value="<?php echo e(old('batas_end_time')); ?>">
                                            <?php $__errorArgs = ['batas_end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <small class="invalid-feedback"><?php echo e($message); ?></small>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-end mb-3"> <!-- Add justify-content-end class -->
                                <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>                            
                        </form>
                    </div>           
                </div>     
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
<?php endif; ?><?php /**PATH D:\Laravel\New folder (2)\resources\views/admin/absensi/create.blade.php ENDPATH**/ ?>