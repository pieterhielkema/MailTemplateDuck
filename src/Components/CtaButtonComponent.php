<?php

namespace MailTemplateDuck\Components;

use MailTemplateDuck\Component;

class CtaButtonComponent extends Component
{
    public function __construct(string $title, string $url, string $position = "center") {
        $this->template = $this->createTemplate([
            'url' => $url,
            'title' => $title,
            'position' => "text-align: {$position};",
        ]);
    }
}