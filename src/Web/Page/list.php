<?php
use App\Web\Page\Page;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;
/** @var iterable<Page> $pages */
/** @var UrlGeneratorInterface $urlGenerator */
/** @var int $currentPage */
/** @var int $totalPages */
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

                    <!-- Pagination -->
                    <?php if ($totalPages > 1): ?>
                        <nav class="mt-4">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item <?= $currentPage <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $currentPage - 1 ?>">← Previous</a>
                                </li>

                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                    <li class="page-item <?= $i === $currentPage ? 'active' : '' ?>">
                                        <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                                    </li>
                                <?php endfor ?>

                                <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?page=<?= $currentPage + 1 ?>">Next →</a>
                                </li>
                            </ul>
                        </nav>
                    <?php endif ?>

                </div>
            </div>
        </div>
    </div>
</div>