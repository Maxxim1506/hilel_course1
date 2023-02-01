<?php
\Core\View::render('admin/blocks/header', ['pageTitle' => 'Cars']);
?>

    <!--    <section style="padding: 5rem 0;">-->
    <section class="pt-5 pb-5">
        <h3> Cars </h3>
        <hr>
        <?php if (!empty($cars)): ?>
            <table class="table table-white table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Номер автопарка</th>
                    <th>Модель</th>
                    <th>Год</th>
                    <th>Цена</th>
                    <th>Отредактировать</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($cars as $car): ?>
                    <tr>
                        <th><?= $car->id ?></th>
                        <th><?= $car->park_id ?></th>
                        <th><?= $car->model ?></th>
                        <th><?= $car->year ?></th>
                        <th><?= $car->price ?></th>
                        <th>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a href="<?= url("admin/cars/{$car->id}/edit") ?>" class="btn btn-warning">Изменить</a>
                                <a href="<?= url("admin/cars/{$car->id}/destroy") ?>" class="btn btn-danger">Удалить</a>
                            </div>
                        </th>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <h6>There are no cars yet</h6>
        <?php endif; ?>
    </section>
<?php

\Core\View::render('admin/blocks/footer');