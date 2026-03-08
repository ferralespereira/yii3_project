<?php

declare(strict_types=1);

namespace App\Web\Page;

use Yiisoft\FormModel\FormModel;
use Yiisoft\Validator\Label;
use Yiisoft\Validator\Rule\Length;

final class Form extends FormModel
{
    #[Label('Title')]
    #[Length(min: 2)]
    public string $title = '';

    #[Label('Text')]
    #[Length(min: 2)]
    public string $text = '';
}