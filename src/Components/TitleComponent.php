<?php

namespace MailTemplateDuck\Components;

use MailTemplateDuck\Component;

class TitleComponent extends Component
{
    public function __construct(string $title) {
        // Validate input

        $this->template = $this->createTemplate([
            'title' => $title
        ]);
    }
}