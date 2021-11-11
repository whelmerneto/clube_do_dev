<?php $__env->startSection('title', 'Verificação'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Verifique o seu E-mail')); ?></div>

                <div class="card-body">
                    <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('Um novo link de verificação foi enviado para a sua caixa de E-mail.')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Antes de prosseguir, procure pelo link de verificação na sua caixa de E-mail.')); ?>

                    <?php echo e(__('Se você não recebeu o seu link')); ?>, <a href="<?php echo e(route('verification.resend')); ?>"><?php echo e(__(', clique aqui para solicitar um novo link')); ?></a>.
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\whelm\Downloads\processo_seletivo\crud_do_dev\resources\views/auth/verify.blade.php ENDPATH**/ ?>