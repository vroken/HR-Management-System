<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambahkan Absensi
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="<?php echo e(route('absensi.store')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="title" class="mb-2">Judul Absensi</label>
                                                    <input type="text" class="form-control mb-3 <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="title" value="<?php echo e(old('title')); ?>">
                                                    <?php $__errorArgs = ['title'];
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
                                            
                                                <div class="col-md-12 d-flex flex-column">
                                                    <label class="jabatan">Jabatan Karyawan</label>
                                                    <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="positions[]" value="<?php echo e($posisi->id); ?>">
                                                            <label class="form-check-label"><?php echo e($posisi->name); ?></label>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-end mb-3">
                                            <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>                            
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
                        <td>Keterangan</td>
                        <td>Jabatan</td>
                        <td>Aksi</td>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" class="check" value="<?php echo e($absen->id); ?>"></td>
                                <td><?php echo e(($absensi->currentPage() - 1) * $absensi->perPage() + $loop->iteration); ?></td>
                                <td><?php echo e($absen->title); ?></td>
                                <td><?php echo e($absen->description); ?></td>
                                <td>
                                    <?php if($absen->positions->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $absen->positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php echo e($position->name); ?>

                                            <?php if(!$loop->last): ?>
                                                , 
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        Tidak ada jabatan
                                    <?php endif; ?>
                                </td>
                                
                                <td class="d-flex justify-content-between">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalEdit<?php echo e($absen->id); ?>">
                                                Edit
                                            </button>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalEdit<?php echo e($absen->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Nama Absensi</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="<?php echo e(route('absensi.update', $absen->id)); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="mb-2">
                                                                            <label for="title" class="mb-2">Judul Absensi</label>
                                                                            <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama Absensi" name="title" value="<?php echo e($absen->title); ?>">
                                                                            <?php $__errorArgs = ['title'];
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
        
                                                                        <div class="mb-2">
                                                                            <label for="title" class="mb-2">Deskripsi</label>
                                                                            <input type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama Absensi" name="description" value="<?php echo e($absen->description); ?>">
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
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="mb-2">
                                                                            <label for="start_time" class="mb-2">Waktu Absen Masuk</label>
                                                                            <input type="time" class="form-control <?php $__errorArgs = ['start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="start_time" value="<?php echo e(old('start_time', \Carbon\Carbon::parse($absen->start_time)->format('H:i'))); ?>">
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
                                                                            <label for="batas_start_time" class="mb-2">Batas Waktu Absen Masuk</label>
                                                                            <input type="time" class="form-control <?php $__errorArgs = ['batas_start_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="batas_start_time" value="<?php echo e(old('batas_start_time', \Carbon\Carbon::parse($absen->batas_start_time)->format('H:i'))); ?>">
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
                                                                            <label for="end_time" class="mb-2">Waktu Absen Keluar</label>
                                                                            <input type="time" class="form-control <?php $__errorArgs = ['end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="end_time" value="<?php echo e(old('end_time', \Carbon\Carbon::parse($absen->end_time)->format('H:i'))); ?>">
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
                                                                            <label for="batas_end_time" class="mb-2">Batas Waktu Absen Keluar</label>
                                                                            <input type="time" class="form-control <?php $__errorArgs = ['batas_end_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Judul Absensi" name="batas_end_time" value="<?php echo e(old('batas_end_time', \Carbon\Carbon::parse($absen->batas_end_time)->format('H:i'))); ?>">
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
                                                                </div>

                                                                <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $posisi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" 
                                                                            type="checkbox" 
                                                                            name="positions[]" 
                                                                            value="<?php echo e($posisi->id); ?>" 
                                                                            <?php echo e($absen->positions->contains($posisi->id) ? 'checked' : ''); ?>>
                                                                        <label class="form-check-label"><?php echo e($posisi->name); ?></label>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <form class="delete-form" method="post" data-route="<?php echo e(route('absensi.destroy', $absen->id)); ?>"
                                        onsubmit="return confirm('Are you sure?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <a href="<?php echo e(route('absensi.destroy', $absen->id)); ?>" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    <?php echo e($absensi->links()); ?>

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
<?php endif; ?><?php /**PATH D:\Laravel\New folder (2)\resources\views/admin/absensi/index.blade.php ENDPATH**/ ?>