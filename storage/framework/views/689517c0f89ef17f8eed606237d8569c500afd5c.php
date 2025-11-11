
<?php $__env->startSection('title', 'Novo Cliente'); ?>
<?php $__env->startSection('content'); ?>
<h1>Novo Cliente</h1>

<form action="<?php echo e(route('clients.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome">
    </div>

    <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço">
    </div>

    <div class="mb-3">
        <label for="observacao" class="form-label">Observação</label><br>
        <textarea name="observacao" id="observacao" rows="3" placeholder="Digite a Observação"></textarea>
    </div>

    <button class="btn btn-success" type="submit">Enviar</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\framework_php\projeto01\resources\views/clients/create.blade.php ENDPATH**/ ?>