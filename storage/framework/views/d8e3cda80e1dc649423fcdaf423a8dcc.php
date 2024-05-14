<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                <!-- Button trigger modal -->
                <div class="row justify-content-between mx-0 align-items-center">
                    

                    <div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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
                                            <option value="" selected disabled>Pilih Jadwal</option> <!-- Disable the default selected option -->
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
                                        
                                    
                                        <!-- Other form fields -->
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php if(session('message')): ?>
                    <div class="alert alert-info">
                        <?php echo e(session('message')); ?>

                    </div>
                <?php endif; ?>

                <table class="table table-hover my-0">
                    <thead>
                        <td scope="col"><input type="checkbox" class="check-all"></td>
                        <td>No.</td>
                        <td>Nama Absensi</td>
                        <td>Nama Karyawan</td>
                        <td>Tanggal Absensi</td>
                        <td>Waktu Absensi</td>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $kehadiran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hadir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" class="check" value="<?php echo e($hadir->id); ?>"></td>
                                <td><?php echo e(($kehadiran->currentPage() - 1) * $kehadiran->perPage() + $loop->iteration); ?></td>
                                <td><?php echo e($hadir->absensi->title); ?></td>
                                <td><?php echo e($hadir->user->name); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($hadir->presence_date)->format('d F Y')); ?></td>
                                <td>
                                    <?php if($hadir->entry_time): ?>
                                        <p>Waktu Masuk</p>
                                        <p><?php echo e($hadir->entry_time); ?></p>
                                    <?php elseif($hadir->exit_time): ?>
                                        Waktu Keluar <br>
                                        <?php echo e($hadir->exit_time); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    <?php echo e($kehadiran->links()); ?>

                </nav>
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
<?php endif; ?>

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
</script><?php /**PATH D:\Laravel\New folder (2)\resources\views/admin/kehadiran/index.blade.php ENDPATH**/ ?>