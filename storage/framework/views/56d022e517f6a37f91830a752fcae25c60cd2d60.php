<?php $__env->startSection('title','Nova Tarefa'); ?>
<?php $__env->startSection('content'); ?>
<h1>Nova Tarefa</h1>
<form method="POST" action="<?php echo e(route('tarefas.store')); ?>">
  <?php echo csrf_field(); ?>
  <div class="mb-3">
    <label class="form-label">Título</label>
    <input name="titulo" class="form-control" value="<?php echo e(old('titulo')); ?>">
    <?php $__errorArgs = ['titulo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <textarea name="descricao" class="form-control"><?php echo e(old('descricao')); ?></textarea>
    <?php $__errorArgs = ['descricao'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <div class="mb-3">
    <label class="form-label">Categoria</label>
    <select name="categoria_id" class="form-select">
      <option value="">-- selecione --</option>
      <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($c->id); ?>" <?php echo e(old('categoria_id') == $c->id ? 'selected' : ''); ?>><?php echo e($c->nome); ?></option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['categoria_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <div class="text-danger small"><?php echo e($message); ?></div> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
  </div>

  <div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" id="concluida" name="concluida" <?php echo e(old('concluida') ? 'checked' : ''); ?>>
    <label for="concluida" class="form-check-label">Concluída</label>
  </div>

  <button class="btn btn-primary">Salvar</button>
  <a href="<?php echo e(route('tarefas.index')); ?>" class="btn btn-secondary">Cancelar</a>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Ark\Documents\Folder\Classes\2025\2nd\frameworks_php\atividade2bimestre\resources\views/tarefas/create.blade.php ENDPATH**/ ?>