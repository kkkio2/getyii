<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '关于';
$content = '
#### 这里是 NAS 家园社区

- 爱 技术，爱 NAS

#### 最后
';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        关于
    </div>
    <div class="panel-body">
        <?= Markdown::process($content, 'gfm') ?>
    </div>
</div>