<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'Mini Gerenciador'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Mini Gerenciador</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">Categorias</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('tarefas.index')); ?>">Tarefas</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
      <?php endif; ?>
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php /**PATH C:\Users\Ark\Documents\Folder\Classes\2025\2nd\frameworks_php\atividade2bimestre\resources\views/layouts/app.blade.php ENDPATH**/ ?>