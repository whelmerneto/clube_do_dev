<?php $__env->startSection('content'); ?>

    <div class="col-8" style="margin:auto;">

        <div class="content d-flex justify-content-center">
            <h1 class="display-5">Produtos cadastrados</h1>
        </div>
    <div class="text-right">
        <a href="<?php echo e(route('products_create')); ?>">
            <button type="button" class="btn btn-dark"> 
                <i class="fas fa-plus"></i>
            </button>
        </a>
    </div>
        <table class="table mt-1">
            <thead class="thead-dark">
            <tr>
                <th scope="col"> Foto</th>
                <th scope="col"> Nome </th>
                <th scope="col"> Descrição </th>
                <th scope="col"> Preço </th>
                <th scope="col"> Ações </th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td> <image height="50px" src="<?php echo e(asset('/storage/images/products/' . $product->image)); ?>"> </image></td>
                    <td> <?php echo e($product->name); ?> </td>
                    <td><?php echo e($product->description); ?> </td>
                    <td> <?php echo e($product->price); ?> </td>
                    <td>
                        <a href="<?php echo e(route('product_edit', $product->id)); ?>"><i class="fas fa-edit"> </i></a>
                        <a href="<?php echo e(route('product_delete', $product->id)); ?>"><i class="fas fa-trash-alt" style="color:red;"></i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\whelm\Downloads\processo_seletivo\crud_do_dev\resources\views/products/show.blade.php ENDPATH**/ ?>