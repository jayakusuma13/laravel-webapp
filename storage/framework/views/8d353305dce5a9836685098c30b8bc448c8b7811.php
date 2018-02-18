<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div>
                  <form method="get" action="products/create">
                      <button type="submit">Add Product</button>
                  </form>

                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ProductId</th>
                        <th scope="col">Images</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row"><?php echo e($image->id); ?></th>
                    <td><?php echo e($image->productId); ?></td>
                    <td><?php echo e($image->images); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>


                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Item Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Text</th>
                        <th scope="col">Commands</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->item); ?></td>
                        <td><?php echo e($post->quantity); ?></td>
                        <td><?php echo e($post->price); ?></td>
                        <td><?php echo e($post->text); ?></td>
                        <td>
                          <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($image->productId == $post->id): ?>
                              <img src="<?php echo e(Storage::url($image->images)); ?>" height="100" width="100">
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                        <td>
                          <form method="get" action="products/<?php echo e($post->id); ?>">
                            <button type="submit">Detail</button>
                          </form>
                          <form method="get" action="products/<?php echo e($post->id); ?>/edit">
                            <button type="submit">Edit</button>
                          </form>
                          <form method="post" action="products/<?php echo e($post->id); ?>">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>

                  <?php echo e($posts->links()); ?>

                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>