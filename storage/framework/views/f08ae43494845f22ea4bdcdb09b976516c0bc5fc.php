<?php $__env->startSection('title','Categorias'); ?>
<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
  <h1>Categorias</h1>
  <a href="<?php echo e(route('categorias.create')); ?>" class="btn btn-primary align-self-center">Nova Categoria</a>
</div>
<table class="table table-striped">
  <thead><tr><th>Nome</th><th>Ações</th></tr></thead>
  <tbody>
    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($c->nome); ?></td>
        <td>
          <a href="<?php echo e(route('categorias.edit', $c)); ?>" class="btn btn-sm btn-secondary">Editar</a>
          <form action="<?php echo e(route('categorias.destroy', $c)); ?>" method="POST" style="display:inline-block">
            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
            <button class="btn btn-sm btn-danger" onclick="return confirm('Remover?')">Remover</button>
          </form>
        </td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ark\Documents\Folder\Classes\2025\2nd\frameworks_php\atividade2bimestre\resources\views/categorias/index.blade.php ENDPATH**/ ?>