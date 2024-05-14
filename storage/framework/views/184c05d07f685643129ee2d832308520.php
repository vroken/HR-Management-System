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
                    <h1 class="card-title mb-0">Daftar List Jabatan</h1>
                </div>
                <!-- Button trigger modal -->
                <div class="row justify-content-between mx-0 align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambahkan Karyawan
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="<?php echo e(route('karyawan.store')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control mb-2 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama Karyawan" name="name" value="<?php echo e(old('name')); ?>">
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
                                            </div>

                                            <div class="col-md-6">
                                                <label for="employee_id">Nomor ID Karyawan</label>
                                                <input type="text" class="form-control mb-2 <?php $__errorArgs = ['employee_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="ID Karyawan" name="employee_id" value="<?php echo e(old('employee_id')); ?>">
                                                <?php $__errorArgs = ['employee_id'];
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
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control mb-2 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>">
                                                <?php $__errorArgs = ['email'];
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
                                                <label for="phone">Nomor Telepon Pribadi</label>
                                                <input type="number" class="form-control mb-2 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nomor Telepon" name="phone" value="<?php echo e(old('phone')); ?>">
                                                <?php $__errorArgs = ['phone'];
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
                                                <label for="emergency_contact">Nomor Telepon Darurat</label>
                                                <input type="number" class="form-control mb-2 <?php $__errorArgs = ['emergency_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Kontak Darurat" name="emergency_contact" value="<?php echo e(old('emergency_contact')); ?>">
                                                <?php $__errorArgs = ['emergency_contact'];
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
                                                <label for="password">Password Lengkap</label>
                                                <input type="password" class="form-control mb-2 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" name="password" value="<?php echo e(old('password')); ?>">
                                                <?php $__errorArgs = ['password'];
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
                                                <label for="password_confirmation">Konfirmasi Password</label>
                                                <input type="password" class="form-control mb-2 <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Konfirmasi Password" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>">
                                                <?php $__errorArgs = ['password_confirmation'];
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
                                                <label for="date_of_birth">Tanggal Lahir</label>
                                                <input type="date" class="form-control mb-2 <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tanggal Lahir" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>">
                                                <?php $__errorArgs = ['date_of_birth'];
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
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="form-select mb-2 <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo e(old('jenis_kelamin')); ?>">
                                                    <option selected>Pilih Jenis Kelamin</option>
                                                    <option value="boy" <?php echo e(old('jenis_kelamin') == 'boy' ? 'selected' : ''); ?>>Laki - Laki</option>
                                                    <option value="girl" <?php echo e(old('jenis_kelamin') == 'girl' ? 'selected' : ''); ?>>Perempuan</option>
                                                </select>
                                                <?php $__errorArgs = ['jenis_kelamin'];
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
                                                <label for="alamat">Alamat Lengkap</label>
                                                <input class="form-control mb-2 <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Alamat" name="alamat" value="<?php echo e(old('alamat')); ?>">
                                                <?php $__errorArgs = ['alamat'];
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
                                                <label for="joining_date">Tanggal Awal Masuk</label>
                                                <input type="date" class="form-control mb-2 <?php $__errorArgs = ['joining_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tanggal Join" name="joining_date" value="<?php echo e(old('joining_date')); ?>">
                                                <?php $__errorArgs = ['joining_date'];
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
                                                <label for="employee_status">Status Karyawan</label>
                                                <select class="form-select mb-2 <?php $__errorArgs = ['employee_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="employee_status">
                                                    <option value="" selected disabled>Pilih Status Karyawan</option>
                                                    <option value="active" <?php echo e(old('employee_status') == 'active' ? 'selected' : ''); ?>>Aktif</option>
                                                    <option value="leave" <?php echo e(old('employee_status') == 'leave' ? 'selected' : ''); ?>>Cuti</option>
                                                    <option value="terminated" <?php echo e(old('employee_status') == 'terminated' ? 'selected' : ''); ?>>Diberhentikan</option>
                                                </select>
                                                <?php $__errorArgs = ['employee_status'];
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

                                            <div class="col-md-6">
                                                <label for="name">Jabatan</label>
                                                <select class="form-select mb-2 <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Nama Jabatan" name="jabatan" value="<?php echo e(old('jabatan')); ?>">
                                                    <option selected>Pilih Nama Jabatan</option>
                                                    <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($position->id); ?>"><?php echo e($position->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['jabatan'];
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
                                                <label for="name">Role</label>
                                                <select class="form-select mb-2 <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Role User" name="role" value="<?php echo e(old('role')); ?>">
                                                    <option selected>Pilih Role</option>
                                                    <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($rol->id); ?>"><?php echo e($rol->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['role'];
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
                                            
                                            <div class="col-md-12">
                                                <label for="image" class="form-label">Gambar Profile</label>
                                                <input class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="image" name="gambar" onchange="previewImage()">
                                                <img class="img-preview img-fluid mt-2 col-sm-7" alt="" >
                                                <?php $__errorArgs = ['gambar'];
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

                                        <div class="modal-footer mt-1">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="gaji">Gaji Pokok</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Gaji" name="gaji" id="gajiInput" value="<?php echo e(old('gaji')); ?>">
                                                    <?php $__errorArgs = ['gaji'];
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
                                                    <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['tunjangan_jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tunjangan Jabatan Karyawan" name="tunjangan_jabatan" id="gajiInput" value="<?php echo e(old('tunjangan_jabatan')); ?>">
                                                    <?php $__errorArgs = ['tunjangan_jabatan'];
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
                                                    <label for="lembur">Lembur</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['lembur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Biaya Lembur" name="lembur" id="gajiInput" value="<?php echo e(old('lembur')); ?>">
                                                    <?php $__errorArgs = ['lembur'];
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
                                                    <label for="uang_makan">Uang Makan</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['uang_makan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Biaya Makan" name="uang_makan" id="gajiInput" value="<?php echo e(old('uang_makan')); ?>">
                                                    <?php $__errorArgs = ['uang_makan'];
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
                                                    <label for="pot_bpjs">Potongan BPJS</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['pot_bpjs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Potongan BPJS" name="pot_bpjs" id="gajiInput" value="<?php echo e(old('pot_bpjs')); ?>">
                                                    <?php $__errorArgs = ['pot_bpjs'];
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
                                                    <label for="pot_pajak">Potongan Pajak</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['pot_pajak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Potongan Pajak" name="pot_pajak" id="gajiInput" value="<?php echo e(old('pot_pajak')); ?>">
                                                    <?php $__errorArgs = ['pot_pajak'];
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
                                                    <label for="pot_jht">Potongan JHT</label>
                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['pot_jht'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Potongan Jaminan Hari Tua" name="pot_jht" id="gajiInput" value="<?php echo e(old('pot_jht')); ?>">
                                                    <?php $__errorArgs = ['pot_jht'];
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
                        <td>Nama Karyawan</td>
                        <td>No Telepon</td>
                        <td>Jabatan</td>
                        <td>Status Karyawan</td>
                        <td>Aksi</td>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><input type="checkbox" class="check" value="<?php echo e($user->id); ?>"></td>
                                <td><?php echo e(($karyawan->currentPage() - 1) * $karyawan->perPage() + $loop->iteration); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->phone); ?></td>
                                <td><?php echo e($user->positions->name ?? 'Tidak ada jabatan'); ?></td>
                                    <?php if($user->employee_status == 'active'): ?>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                    <?php elseif($user->employee_status == 'leave'): ?>
                                        <td><span class="badge bg-danger">Keluar</span></td>
                                    <?php elseif($user->employee_status == 'terminated'): ?>
                                        <td><span class="badge bg-warning">Cuti</span></td>
                                    <?php endif; ?>
                                <td class="">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalShow<?php echo e($user->id); ?>">
                                                    Lihat
                                                </button>
                                            </div>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalShow<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Data Karyawan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="card mb-3" style="max-width: 540px;">
                                                            <div class="row g-0">
                                                                <div class="col-md-4">
                                                                    <img src="<?php echo e(Storage::url($user->gambar)); ?>" class="img-fluid rounded-start" alt="gambar">
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="card-body">
                                                                        <h2><?php echo e($user->name); ?></h2>
                                                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo e($user->employee_id); ?></h6>
                                                                        <p class="card-text"><?php echo e($user->alamat); ?></p>
                                                                    </div>
                                                                </div>
                                                                <ul class="list-group list-group-flush mt-3">
                                                                    <div class="row">
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Email</span>
                                                                            <li class="list-group-item"><?php echo e($user->email); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span for="">Nomor Telepon</span>
                                                                            <li class="list-group-item"><?php echo e($user->phone); ?></li>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span for="">Nomor Telepon Darurat</span>
                                                                            <li class="list-group-item"><?php echo e($user->emergency_contact); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Tanggal Lahir</span>
                                                                            <li class="list-group-item"><?php echo e(\Carbon\Carbon::parse($user->date_of_birth)->format('d F Y')); ?></li>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Jenis Kelamin</span>
                                                                            <?php if($user->jenis_kelamin == 'boy'): ?>
                                                                                <li class="list-group-item">Laki-Laki</li>
                                                                            <?php elseif($user->jenis_kelamin == 'girl'): ?>
                                                                                <li class="list-group-item">Perempuan</li>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Tanggal Awal Masuk</span>
                                                                            <li class="list-group-item"><?php echo e(\Carbon\Carbon::parse($user->joining_date)->format('d F Y')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Status Karyawan</span>
                                                                            <?php if($user->employee_status == 'active'): ?>
                                                                                <li class="list-group-item">Aktif</li>
                                                                            <?php elseif($user->employee_status == 'leave'): ?>
                                                                                <li class="list-group-item">Keluar</li>
                                                                            <?php elseif($user->employee_status == 'terminated'): ?>
                                                                                <li class="list-group-item">Cuti</li>
                                                                            <?php endif; ?>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Jabatan Karyawan</span>
                                                                            <li class="list-group-item"><?php echo e($user->positions->name); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Role Account</span>
                                                                            <li class="list-group-item"><?php echo e($user->role->name); ?></li>
                                                                        </div>

                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Gaji Pokok</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->gaji, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Tunjangan Jabatan</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->tunjangan_jabatan, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Biaya Lembur</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->lembur, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Biaya Makan</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->uang_makan, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Potongan BPJS</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->pot_bpjs, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Potongan Pajak</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->pot_pajak, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-6 mt-2">
                                                                            <span>Potongan JHT</span>
                                                                            <li class="list-group-item"><?php echo e(number_format($user->pot_jht, 0, ',', '.')); ?></li>
                                                                        </div>
                                                                        <div class="col-md-12 mt-2">
                                                                            <span>Total Gaji Keseluruhan</span>
                                                                            <li class="list-group-item">
                                                                                <?php echo e(number_format($user->gaji + $user->tunjangan_jabatan + $user->lembur + $user->uang_makan - $user->pot_bpjs - $user->pot_pajak - $user->pot_jht, 0, ',', '.')); ?>

                                                                            </li>
                                                                        </div>
                                                                    </div>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="<?php echo e(route('generate.pdf', $user->id)); ?>" class="btn btn-primary">Cetak Slip Gaji</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="">
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalEdit<?php echo e($user->id); ?>">
                                                Edit
                                            </button>
                                        </div>
                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalEdit<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Karyawan</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="<?php echo e(route('karyawan.update', $user->id)); ?>" enctype="multipart/form-data">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="name">Nama Lengkap</label>
                                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama Karyawan" name="name" value="<?php echo e($user->name); ?>">
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
                                                                </div>
                    
                                                                <div class="col-md-6">
                                                                    <label for="employee_id">Nomor ID Karyawan</label>
                                                                    <input type="text" class="form-control mb-2 <?php $__errorArgs = ['employee_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="ID Karyawan" name="employee_id" value="<?php echo e($user->employee_id); ?>">
                                                                    <?php $__errorArgs = ['employee_id'];
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
                    
                                                                <div class="col-md-12">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" class="form-control mb-2 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" name="email" value="<?php echo e($user->email); ?>">
                                                                    <?php $__errorArgs = ['email'];
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
                                                                    <label for="phone">Nomor Telepon Pribadi</label>
                                                                    <input type="number" class="form-control mb-2 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nomor Telepon" name="phone" value="<?php echo e($user->phone); ?>">
                                                                    <?php $__errorArgs = ['phone'];
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
                                                                    <label for="emergency_contact">Nomor Telepon Darurat</label>
                                                                    <input type="number" class="form-control mb-2 <?php $__errorArgs = ['emergency_contact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Kontak Darurat" name="emergency_contact" value="<?php echo e($user->emergency_contact); ?>">
                                                                    <?php $__errorArgs = ['emergency_contact'];
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
                                                                    <label for="current_password">Password Lama</label>
                                                                    <input type="password" class="form-control mb-2 <?php $__errorArgs = ['current_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password Lama" name="current_password">
                                                                    <?php $__errorArgs = ['current_password'];
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

                                                                <div class="col-md-6">
                                                                    <label for="new_password">Password Baru</label>
                                                                    <input type="password" class="form-control mb-2 <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password Baru" name="new_password">
                                                                    <?php $__errorArgs = ['new_password'];
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
                                                                <div class="col-md-6">
                                                                    <label for="new_password_confirmation">Konfirmasi Password Baru</label>
                                                                    <input type="password" class="form-control mb-2" placeholder="Konfirmasi Password Baru" name="new_password_confirmation">
                                                                    <?php $__errorArgs = ['new_password_confirmation'];
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
                    
                                                                <div class="col-md-6">
                                                                    <label for="date_of_birth">Tanggal Lahir</label>
                                                                    <input type="date" class="form-control mb-2 <?php $__errorArgs = ['date_of_birth'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tanggal Lahir" name="date_of_birth" value="<?php echo e($user->date_of_birth); ?>">
                                                                    <?php $__errorArgs = ['date_of_birth'];
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
                                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                    <select class="form-select mb-2 <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?php echo e($user->jenis_kelamin); ?>">
                                                                        <option value="boy" <?php echo e($user->jenis_kelamin == 'boy' ? 'selected' : ''); ?>>
                                                                            Laki-Laki
                                                                        </option>
                                                                        <option value="girl" <?php echo e($user->jenis_kelamin == 'girl' ? 'selected' : ''); ?>>
                                                                            Perempuan
                                                                        </option>
                                                                    </select>
                                                                    <?php $__errorArgs = ['jenis_kelamin'];
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
                                                                    <label for="alamat">Alamat Lengkap</label>
                                                                    <input class="form-control mb-2 <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Alamat" name="alamat" value="<?php echo e($user->alamat); ?>">
                                                                    <?php $__errorArgs = ['alamat'];
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
                                                                    <label for="joining_date">Tanggal Awal Masuk</label>
                                                                    <input type="date" class="form-control mb-2 <?php $__errorArgs = ['joining_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tanggal Join" name="joining_date" value="<?php echo e($user->joining_date); ?>">
                                                                    <?php $__errorArgs = ['joining_date'];
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
                                                                    <label for="employee_status">Status Karyawan</label>
                                                                    <select class="form-select mb-2 <?php $__errorArgs = ['employee_status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="employee_status">
                                                                        <option value="active" <?php echo e($user->employee_status == 'active' ? 'selected' : ''); ?>>
                                                                            Aktif
                                                                        </option>
                                                                        <option value="terminated" <?php echo e($user->employee_status == 'terminated' ? 'selected' : ''); ?>>
                                                                            Cuti
                                                                        </option>
                                                                        <option value="leave" <?php echo e($user->employee_status == 'leave' ? 'selected' : ''); ?>>
                                                                            Keluar
                                                                        </option>
                                                                    </select>
                                                                    <?php $__errorArgs = ['employee_status'];
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
                    
                                                                <div class="col-md-6">
                                                                    <label for="name">Jabatan</label>
                                                                    <select class="form-select mb-2 <?php $__errorArgs = ['jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Nama Jabatan" name="jabatan">
                                                                        <?php $__currentLoopData = $positions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $position): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($position->id); ?>" <?php echo e($position->id == $user->positions->id ? 'selected' : ''); ?>>
                                                                                <?php echo e($position->name); ?>

                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                    <?php $__errorArgs = ['jabatan'];
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
                                                                    <label for="name">Role</label>
                                                                    <select class="form-select mb-2 <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  placeholder="Role User" name="role" value="<?php echo e(old('role')); ?>">
                                                                        <option selected>Pilih Role</option>
                                                                        <?php $__currentLoopData = $role; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($rol->id); ?>" <?php echo e($rol->id == $user->role->id ? 'selected' : ''); ?>>
                                                                                <?php echo e($rol->name); ?>

                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </select>
                                                                    <?php $__errorArgs = ['role'];
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
                                                                
                                                                <div class="col-md-12">
                                                                    <label for="image" class="form-label">Gambar Profile</label>
                                                                    <input class="form-control <?php $__errorArgs = ['gambar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="image2" name="gambar" onchange="previewImage2()" value="<?php echo e($user->gambar); ?>">
                                                                    <img class="img-preview2 img-fluid mt-2 col-sm-7" alt="">
                                                                    <?php if($user->gambar): ?>
                                                                        <img src="<?php echo e(Storage::url($user->gambar)); ?>" class="img-fluid" alt="User Image">
                                                                    <?php endif; ?>
                                                                    <?php $__errorArgs = ['gambar'];
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

                                                            <div class="modal-footer mt-1">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="gaji">Gaji Pokok</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['gaji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Gaji" name="gaji" id="gajiInput" value="<?php echo e($user->gaji); ?>">
                                                                        <?php $__errorArgs = ['gaji'];
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
                                                                        <label for="tunjangan_jabatan">Tunjangan Jabatan</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['tunjangan_jabatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Tunjangan Jabatan Karyawan" name="tunjangan_jabatan" id="gajiInput" value="<?php echo e($user->tunjangan_jabatan); ?>">
                                                                        <?php $__errorArgs = ['tunjangan_jabatan'];
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
                                                                        <label for="lembur">Lembur</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['lembur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Biaya Lembur" name="lembur" id="gajiInput" value="<?php echo e($user->lembur); ?>">
                                                                        <?php $__errorArgs = ['lembur'];
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
                                                                        <label for="uang_makan">Uang Makan</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['uang_makan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Biaya Makan" name="uang_makan" id="gajiInput" value="<?php echo e($user->uang_makan); ?>">
                                                                        <?php $__errorArgs = ['uang_makan'];
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
                                                                        <label for="pot_bpjs">Potongan BPJS</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['pot_bpjs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Potongan BPJS" name="pot_bpjs" id="gajiInput" value="<?php echo e($user->pot_bpjs); ?>">
                                                                        <?php $__errorArgs = ['pot_bpjs'];
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
                                                                        <label for="pot_pajak">Potongan Pajak</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['pot_pajak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Potongan Pajak" name="pot_pajak" id="gajiInput" value="<?php echo e($user->pot_pajak); ?>">
                                                                        <?php $__errorArgs = ['pot_pajak'];
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
                                                                        <label for="pot_jht">Potongan JHT</label>
                                                                        <input type="text" class="form-control mb-2 <?php $__errorArgs = ['pot_jht'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Potongan Jaminan Hari Tua" name="pot_jht" id="gajiInput" value="<?php echo e($user->pot_jht); ?>">
                                                                        <?php $__errorArgs = ['pot_jht'];
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
                                </td>
                                <td>
                                    <div class="row justify-content-between mx-0 align-items-center">
                                        <div class="col-auto">

                                            <form class="delete-form" method="post" data-route="<?php echo e(route('karyawan.destroy', $user->id)); ?>"
                                                onsubmit="return confirm('Are you sure?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?> 
                                                <a href="<?php echo e(route('karyawan.destroy', $user->id)); ?>" class="btn btn-danger" data-confirm-delete="true">Hapus</a>
                                            </form>
                                        </div>
                                    </div>
                                </td>                              
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <br>
                <nav aria-label="Page navigation example">
                    
                </nav>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgpreview = document.querySelector('.img-preview');

            imgpreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = (oFREvent) => {
                imgpreview.src = oFREvent.target.result;
            }
        }

        function previewImage2() {
            const image = document.querySelector('#image2');
            const imgpreview = document.querySelector('.img-preview2');

            imgpreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = (oFREvent) => {
                imgpreview.src = oFREvent.target.result;
            }
        }
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
<?php endif; ?><?php /**PATH D:\Laravel\New folder (2)\resources\views/admin/karyawan/index.blade.php ENDPATH**/ ?>