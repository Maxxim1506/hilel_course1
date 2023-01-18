<?php
\Core\View::render('admin/blocks/header', ['pageTitle' => 'Create car']);
$errors = $errors ?? [];
?>
    <div class="container pt-5 pb-5">
        <div class="row">
            <h3>Добавить машину</h3>
        </div>
        <div class="row"
        <div class="col-1"></div>
        <div class="col-10">
            <form class="card mt-5" method="POST" action="<?= url('admin/cars/store') ?>">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="park_id" class="form-label">Адресс парка</label>
                        <input type="text" class="form-control" id="park_id" name="park_id">
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Модель машины</label>
                        <input type="text" class="form-control" id="model" name="model">
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Год машины</label>
                        <input type="text" class="form-control" id="year" name="year">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Стоимость машины с НДС</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                </div>
                <div class="card-footer">
                    <div class="mb-3 form-check">
                        <button type="submit" class="btn btn-primary">Добавить машину в автопарк</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    </div>


<?php
\Core\View::render('admin/blocks/footer');