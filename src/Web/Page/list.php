<?php
use App\Web\Page\Page;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;

/** @var iterable<Page> $pages */
/** @var UrlGeneratorInterface $urlGenerator */
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="h3 mb-0">Pages</h1>
                        <?= Html::a('Create', $urlGenerator->generate('page/edit', ['slug' => 'new']), ['class' => 'btn btn-primary text-white']) ?>
                    </div>

                    <ul class="list-group list-group-flush">
                        <?php foreach ($pages as $page): ?>
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                                <?= Html::a(
                                    Html::encode($page->title),
                                    $urlGenerator->generate('page/view', ['slug' => $page->slug]),
                                    ['class' => 'text-decoration-none fw-medium']
                                ) ?>
                                <span class="badge text-bg-light">View</span>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>