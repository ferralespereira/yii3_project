<?php
use App\Web\Page\Page;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Yii\View\Renderer\Csrf;

/** @var Page $page */
/** @var UrlGeneratorInterface $urlGenerator */
/* @var Csrf $csrf */
?>

<?php
$deleteForm = Html::form()
    ->post($urlGenerator->generate('page/delete', ['slug' => $page->slug]))
    ->csrf($csrf);
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-9 col-xl-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4 p-md-5">
                    <nav aria-label="breadcrumb" class="mb-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <?= Html::a('Pages', $urlGenerator->generate('page/list'), ['class' => 'text-decoration-none']) ?>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?= Html::encode($page->title) ?>
                            </li>
                        </ol>
                    </nav>

                    <h1 class="h2 mb-4"><?= Html::encode($page->title) ?></h1>

                    <p class="mb-4 text-body-secondary"><?= Html::encode($page->text) ?></p>

                    <div class="d-flex gap-2 align-items-center">
                        <?= Html::a('Edit', $urlGenerator->generate('page/edit', ['slug' => $page->slug]), ['class' => 'btn btn-outline-primary']) ?>

                        <?= $deleteForm->open(['class' => 'm-0']) ?>
                            <?= Html::submitButton('Delete', ['class' => 'btn btn-outline-danger']) ?>
                        <?= $deleteForm->close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>