<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Text</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->item); ?></td>
                        <td><?php echo e($post->quantity); ?></td>
                        <td><?php echo e($post->price); ?></td>
                        <td><?php echo e($post->text); ?></td>
                        <td>
                          <?php $__currentLoopData = $postImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <img src="<?php echo e(Storage::url($image->images)); ?>" height="100" width="100">
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>