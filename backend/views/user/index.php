<?php

/* @var $this yii\web\View */

use yii\widgets\LinkPager;

$this->title = 'Users';
?>
<div class="site-index">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Type</th>
                <th>Status</th>
            </tr>
        </thead>
    <?php
    foreach ($models as $model) { ?>
        <td><?= $model->username ?></td>
        <td><?= $model->email ?></td>
        <td><?= $model->type ?></td>
        <td><?= ($model->status)?"active":"not-active" ?></td>
    <?php }
    // display pagination
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);?>
</div>
