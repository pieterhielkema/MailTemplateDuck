<?php

namespace MailTemplateDuck\Components;

use MailTemplateDuck\Component;

class DisclaimerComponent extends Component
{
    public function __construct(string $text) {
        $this->template = $this->createTemplate([
            'text' => $text
        ]);
    }
}