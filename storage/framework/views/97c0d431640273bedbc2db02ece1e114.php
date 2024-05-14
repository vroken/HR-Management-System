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
                    <h1 class="card-title mb-0">Daftar List Absensi</h1>
                </div>
                <?php if(session('message')): ?>
                    <div class="alert alert-info">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>
            
                <div class="modal-body">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
            
                    <form method="POST" action="<?php echo e(route('kehadiran.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
                        <select class="form-select mb-4 <?php $__errorArgs = ['absensi_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="absensi_id">
                            <option value="" selected disabled>Pilih Jadwal</option>
                            <?php $__currentLoopData = $absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($absen->id); ?>"><?php echo e($absen->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['absensi_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="invalid-feedback"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <input type="hidden" name="presence_date" value="<?php echo e(now()->toDateString()); ?>">
                        
                        <div class="mb-3">
                            <label for="entry_button" class="form-label <?php $__errorArgs = ['entry_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">Press Enter Button</label>
                            <?php $__errorArgs = ['entry_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="invalid-feedback"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <button type="button" class="btn btn-primary" id="entry_button">Enter</button>
                            <input type="hidden" id="entry_time" class="<?php $__errorArgs = ['entry_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="entry_time" value="<?php echo e(old('entry_time')); ?>">
                        </div>
                    
                        <div class="mb-3">
                            <label for="exit_button" class="form-label">Press Exit Button</label>
                            <?php $__errorArgs = ['absensi_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="invalid-feedback"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <button type="button" class="btn btn-primary" id="exit_button" disabled>Exit</button>
                            <input type="hidden" id="exit_time" name="exit_time" class="<?php $__errorArgs = ['exit_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('exit_time')); ?>">
                        </div>
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
            
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var entryButton = document.getElementById('entry_button');
            var exitButton = document.getElementById('exit_button');
    
            entryButton.addEventListener('click', function() {
                var entryTimeInput = document.getElementById('entry_time');
                entryTimeInput.value = getCurrentTime();
                exitButton.disabled = false;
            });
    
            exitButton.addEventListener('click', function() {
                var exitTimeInput = document.getElementById('exit_time');
                exitTimeInput.value = getCurrentTime();
                this.disabled = true; // Disable exit button after clicking
            });
    
            function getCurrentTime() {
                var now = new Date();
                var hours = now.getHours().toString().padStart(2, '0');
                var minutes = now.getMinutes().toString().padStart(2, '0');
                return hours + ':' + minutes;
            }
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal59fca5adad3f44c17f9847442ff25a5c)): ?>
<?php $attributes = $__attributesOriginal59fca5adad3f44c17f9847442ff25a5c; ?>
<?php unset($__attributesOriginal59fca5adad3f44c17f9847442ff25a5c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal59fca5adad3f44c17f9847442ff25a5c)): ?>
<?php $component = $__componentOriginal59fca5adad3f44c17f9847442ff25a5c; ?>
<?php unset($__componentOriginal59fca5adad3f44c17f9847442ff25a5c); ?>
<?php endif; ?><?php /**PATH D:\Laravel\New folder (2)\resources\views/admin/kehadiran/create.blade.php ENDPATH**/ ?>