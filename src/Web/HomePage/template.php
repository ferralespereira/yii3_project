<?php

declare(strict_types=1);

use App\Shared\ApplicationParams;
use Yiisoft\Html\Html;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\View\WebView;

/**
 * @var WebView $this
 * @var ApplicationParams $applicationParams
 */

$this->setTitle($applicationParams->name);
$urlGenerator = $this->getParameter('urlGenerator');
?>

<div class="container py-4 py-md-5">
	<div class="row justify-content-center mb-4">
		<div class="col-12 col-lg-9 text-center">
			<h1 class="display-6 fw-bold mb-2"><?= Html::encode($applicationParams->name) ?></h1>
			<p class="text-body-secondary mb-0">Choose where you want to go.</p>
		</div>
	</div>

	<div class="row g-3 g-md-4">
		<div class="col-12 col-md-6">
            <a class="text-decoration-none" href="<?= $urlGenerator->generate('page/list') ?>">
				<article class="card h-100 shadow-sm border-0">
					<div class="card-body p-4">
						<h2 class="h4 mb-2 text-dark">Pages</h2>
						<p class="text-body-secondary mb-0">Browse, create, and manage content pages.</p>
					</div>
				</article>
			</a>
		</div>

		<div class="col-12 col-md-6">
			<a class="text-decoration-none" href="<?= $urlGenerator->generate('echo/say') ?>">
				<article class="card h-100 shadow-sm border-0">
					<div class="card-body p-4">
						<h2 class="h4 mb-2 text-dark">Say</h2>
						<p class="text-body-secondary mb-0">Try the echo form and test interaction.</p>
					</div>
				</article>
			</a>
		</div>

		<div class="col-12">
			<a class="text-decoration-none" href="<?= $urlGenerator->generate('about') ?>">
				<article class="card h-100 shadow-sm border-0">
					<div class="card-body p-4">
						<h2 class="h4 mb-2 text-dark">About Us</h2>
						<p class="text-body-secondary mb-0">Learn more about the project and team.</p>
					</div>
				</article>
			</a>
		</div>
	</div>
</div>

