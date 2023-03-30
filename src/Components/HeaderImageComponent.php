<?php

namespace MailTemplateDuck\Components;

use MailTemplateDuck\Component;

class HeaderImageComponent extends Component
{
    public function __construct(string $filePath) {
        $this->template = $this->createTemplate([
            'path' => $filePath
        ]);
    }
}