<?php $__env->startSection('title' , 'Editando Produto'); ?>
<?php $__env->startSection('content'); ?>

    <div class="d-flex justify-content-center">
        <h1>Edite seu produto</h1>
    </div>

    <div class="card col-8" style="margin:auto;">
        <div class="card-body">
            <form classs="card-body form-group" action="<?php echo e(route('product_update', $products->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-3">
                    <img src="<?php echo asset("storage/images/products/$products->image")?>" height="100px"></img>
                </div>
                <div class="form-group">
                    <label for="product_name">Nome do produto</label>
                    <input type="text" class="form-control" id="product_name" aria-describedby="product_help" name ="name" value=" <?php echo e($products->name); ?> " required>
                    <small id="product_help" class="form-text text-muted">Insira o nome do seu produto.</small>
                </div>
                <div class="form-group">
                    <label for="product_description">Descrição</label>
                    <textarea class="form-control" id="product_description" rows="3" required name="description">  <?php echo e($products->description); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="product_price">Preço do produto</label>
                    <input type="text" class="form-control" min="0.01" step="0.01" aria-describedby="product_price" name="price" value=" <?php echo e($products->price); ?> " />
                    <small id="product_price" class="form-text text-muted">Insira o preço do seu produto.</small>
                </div>
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\whelm\Downloads\processo_seletivo\crud_do_dev\resources\views/products/edit_form.blade.php ENDPATH**/ ?>