<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="title m-b-md">
                    Create Posts
                </div>

                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="<?php echo e(route('posts.store')); ?>" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                        <label for="title" class="col-md-4 control-label">Title</label>

                        <div class="col-md-6">
                            <input id="title" type="text" class="form-control" name="title" value="<?php echo e(old('title')); ?>" required autofocus>

                            <?php if($errors->has('title')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('title')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                    <div class="form-group<?php echo e($errors->has('text') ? ' has-error' : ''); ?>">
                        <label for="text" class="col-md-4 control-label">text</label>

                        <div class="col-md-6">
                            <input id="text" type="text" class="form-control" name="text" value="<?php echo e(old('text')); ?>" required>

                            <?php if($errors->has('text')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('text')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <input id="image" type="file" name="image" >

                    <input id="author" type="hidden" name="author" value=<?php echo e(Auth::user()->id); ?> >

                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>