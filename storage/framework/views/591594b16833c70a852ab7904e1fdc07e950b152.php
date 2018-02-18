<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div>
                  <form method="get" action="posts/create">
                      <button type="submit">Add Post</button>
                  </form>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Text</th>
                        <th scope="col">Image</th>
                        <th scope="col">Author</th>
                        <th scope="col">Commands</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <th scope="row"><?php echo e($post->id); ?></th>
                        <td><?php echo e($post->title); ?></td>
                        <td><?php echo e($post->text); ?></td>
                        <td><?php echo e($post->name); ?></td>
                        <td><img src="<?php echo e(Storage::url($post->images)); ?>" height="100" width="100"></td>
                        <td>
                          <form method="get" action="posts/<?php echo e($post->id); ?>">
                            <button type="submit">Detail</button>
                          </form>
                          <form method="get" action="posts/<?php echo e($post->id); ?>/edit">
                            <button type="submit">Edit</button>
                          </form>
                          <form method="post" action="posts/<?php echo e($post->id); ?>">
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