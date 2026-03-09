<?php

declare(strict_types=1);

use Yiisoft\View\WebView;

/**
 * @var WebView $this
 */

$this->setTitle('About Us');
?>

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="mb-4">About Us</h1>
            
            <section class="mb-5">
                <h2>Our Story</h2>
                <p class="lead">
                    Welcome to our application! We are passionate about building modern, 
                    high-performance web applications using cutting-edge technology.
                </p>
                <p>
                    Our platform is built on the Yii3 framework, a powerful and flexible 
                    PHP framework that enables us to deliver robust and scalable solutions. 
                    We believe in creating applications that are not only functional but also 
                    maintainable and efficient.
                </p>
            </section>

            <section class="mb-5">
                <h2>Our Mission</h2>
                <p>
                    Our mission is to provide exceptional web experiences through innovative 
                    technology and thoughtful design. We strive to:
                </p>
                <ul>
                    <li>Deliver high-quality, reliable software solutions</li>
                    <li>Maintain clean, well-documented code</li>
                    <li>Follow best practices and modern standards</li>
                    <li>Continuously improve and innovate</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2>Technology Stack</h2>
                <p>
                    We leverage modern technologies to build our applications:
                </p>
                <ul>
                    <li><strong>Yii3 Framework</strong> - A high-performance PHP framework</li>
                    <li><strong>PSR Standards</strong> - Following PHP-FIG standards for interoperability</li>
                    <li><strong>Docker</strong> - Containerized development and deployment</li>
                    <li><strong>Codeception</strong> - Comprehensive testing framework</li>
                    <li><strong>Modern PHP</strong> - PHP 8.2+ with strict typing and modern features</li>
                </ul>
            </section>

            <section class="mb-5">
                <h2>Get in Touch</h2>
                <p>
                    We'd love to hear from you! Whether you have questions, feedback, or 
                    just want to say hello, feel free to reach out.
                </p>
                <p>
                    Visit our <a href="/">homepage</a> to learn more about what we do.
                </p>
            </section>
        </div>
    </div>
</div>
