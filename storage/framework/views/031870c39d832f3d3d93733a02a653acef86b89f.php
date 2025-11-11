
<?php $__env->startSection('title', 'Lista de Clientes'); ?>

<?php $__env->startSection('content'); ?>
<h1>Lista de Clientes</h1>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($client->id); ?></td>
        <td>
          <a href="<?php echo e(route('clients.show', $client)); ?>"><?php echo e($client->nome); ?></a>
        </td>
        <td><?php echo e($client->endereco); ?></td>
        <td>
          <a class="btn btn-primary" href="<?php echo e(route('clients.edit', $client)); ?>">
            Atualizar
          </a>

          <form action="<?php echo e(route('clients.destroy', $client)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button 
              class="btn btn-danger" 
              type="submit"
              onclick="return confirm('Deseja realmente excluir?')"
            >
              Apagar
            </button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

<a class="btn btn-success" href="<?php echo e(route('clients.create')); ?>">Novo Cliente</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Documents\framework_php\projeto01\resources\views/clients/index.blade.php ENDPATH**/ ?>