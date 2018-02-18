<?php $__env->startSection('content'); ?>
            <div class="content">
                <div class="title m-b-md">
                    Create Products
                </div>

                <div class="panel-body">
                  <form class="form-horizontal" method="POST" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group<?php echo e($errors->has('item') ? ' has-error' : ''); ?>">
                        <label for="title" class="col-md-4 control-label">Item Title</label>

                        <div class="col-md-6">
                            <input id="item" type="text" class="form-control" name="item" value="<?php echo e(old('item')); ?>" required autofocus>

                            <?php if($errors->has('item')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('item')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>


                    <div class="form-group<?php echo e($errors->has('price') ? ' has-error' : ''); ?>">
                        <label for="price" class="col-md-4 control-label">price</label>

                        <div class="col-md-6">
                            <input id="price" type="text" class="form-control" name="price" value="<?php echo e(old('price')); ?>" required>

                            <?php if($errors->has('price')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('price')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group<?php echo e($errors->has('quantity') ? ' has-error' : ''); ?>">
                        <label for="quantity" class="col-md-4 control-label">quantity</label>

                        <div class="col-md-6">
                            <input id="quantity" type="text" class="form-control" name="quantity" value="<?php echo e(old('quantity')); ?>" required>

                            <?php if($errors->has('quantity')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('quantity')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
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

                    <input id="image" type="file" name="image[]" multiple>

                    <!--<input id="author" type="hidden" name="author" value=<?php echo e(Auth::user()->id); ?> >-->

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