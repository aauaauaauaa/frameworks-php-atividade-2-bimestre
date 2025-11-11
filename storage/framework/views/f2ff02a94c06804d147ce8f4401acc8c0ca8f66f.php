
<?php $__env->startSection('title', 'Detalhes do Cliente'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
      Detalhes do Cliente <?php echo e($client->nome); ?>

  </div>
  <div class="card-body">
      <p>ID: <?php echo e($client->id); ?></p>
      <p>Nome: <?php echo e($client->nome); ?></p>
      <p>Endereço: <?php echo e($client->endereco); ?></p>
      <p>Observação: <?php echo e($client->observacao); ?></p>

      <a href="<?php echo e(route('clients.index')); ?>">Voltar para a lista de clientes</a>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\framework_php\projeto01\resources\views/clients/show.blade.php ENDPATH**/ ?>