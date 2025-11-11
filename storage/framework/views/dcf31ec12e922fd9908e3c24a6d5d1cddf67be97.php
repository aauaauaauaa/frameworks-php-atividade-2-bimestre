<?php $__env->startSection('title','Nova Categoria'); ?>
<?php $__env->startSection('content'); ?>
<h1>Nova Categoria</h1>
<form method="POST" action="<?php echo e(route('categorias.store')); ?>">
  <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label class="form-label">Nome</label>
    <input name="nome" class="form-control" value="<?php echo e(old('nome')); ?>">
    <?php $__errorArgs = ['nome'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>
  <button class="btn btn-primary">Salvar</button>
  <a href="<?php echo e(route('categorias.index')); ?>" class="btn btn-secondary">Cancelar</a>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ark\Documents\Folder\Classes\2025\2nd\frameworks_php\atividade2bimestre\resources\views/categorias/create.blade.php ENDPATH**/ ?>