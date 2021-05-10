
<?php $__env->startSection('title','Produtos'); ?>
<?php $__env->startSection('content'); ?>

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie um evento</h1>
        <form action="/events" method="POST">
        <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="title" class="form-label">Evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="nome do evento">
            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-label">Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-label">O evento e privado ? </label>
                <select name="private" id="private" class="form-select">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select> 
            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-label">Descrição: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary " value="Criar Evento">
        </form>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto-laravel\projetoLaravel\resources\views/events/create.blade.php ENDPATH**/ ?>