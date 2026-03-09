<?php
use App\Web\Echo\Form;
use Yiisoft\FormModel\Field;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Yii\View\Renderer\Csrf;

/**
 * @var Form $form
 * @var string[] $errors
 * @var UrlGeneratorInterface $urlGenerator
 * @var Csrf $csrf
 */

$htmlForm = Html::form()
    ->post($urlGenerator->generate('echo/say'))
    ->csrf($csrf);
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <?= $htmlForm->open(['class' => 'vstack gap-3']) ?>
                        <?= Field::text($form, 'message')
                            ->required()
                            ->addLabelClass('form-label', 'fw-semibold')
                            ->addInputClass('form-control')
                            ->addErrorClass('text-danger', 'small', 'mt-1') ?>
                        <?= Html::submitButton('Say', ['class' => 'btn btn-primary mt-2']) ?>
                    <?= $htmlForm->close() ?>

                    <?php if ($form->isValid()): ?>
                        <div class="alert alert-info mt-3 mb-0" role="alert">
                            Echo said: <?= Html::encode($form->message) ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>