<?php
use yii\helpers\Html;
use yii\helpers\Markdown;

/* @var $this yii\web\View */
$this->title = '联系我们';
$content = '
## QQ群

- 交流群：65194887

## 个人联系

- QQ：1028735336
- Mail：kkkio2[#]163.com

';
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= $this->title ?>
    </div>
    <div class="panel-body">
        <?= Markdown::process($content, 'gfm') ?>
    </div>
</div>