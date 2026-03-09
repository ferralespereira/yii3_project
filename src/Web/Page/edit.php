<?php
use App\Web\Page\Form;
use Yiisoft\FormModel\Field;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Yii\View\Renderer\Csrf;

/**
 * @var Form $form
 * @var string[] $errors
 * @var UrlGeneratorInterface $urlGenerator
 * @var Csrf $csrf
 * @var bool $isNew
 * @var string $slug
 */

$htmlForm = Html::form()
    ->post($urlGenerator->generate('page/edit', ['slug' => $slug]))
    ->csrf($csrf);
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <h1 class="h3 mb-4"><?= $isNew ? 'Create Page' : 'Edit Page' ?></h1>

                    <?= $htmlForm->open(['class' => 'vstack gap-3']) ?>
                        <?= Field::text($form, 'title')
                            ->required()
                            ->addLabelClass('form-label', 'fw-semibold')
                            ->addInputClass('form-control')
                            ->addErrorClass('text-danger', 'small', 'mt-1') ?>

                        <?= Field::textarea($form, 'text')
                            ->required()
                            ->addLabelClass('form-label', 'fw-semibold')
                            ->addInputClass('form-control')
                            ->addInputAttributes(['rows' => 8])
                            ->addErrorClass('text-danger', 'small', 'mt-1') ?>

                        <div class="d-flex gap-2 mt-2">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Back', $urlGenerator->generate('page/list'), ['class' => 'btn btn-outline-secondary']) ?>
                        </div>
                    <?= $htmlForm->close() ?>
                </div>
            </div>
        </div>
    </div>
</div>