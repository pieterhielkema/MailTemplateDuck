<?php

namespace MailTemplateDuck\Components;

use MailTemplateDuck\Component;

class SpacerComponent extends Component
{
    public function __construct(int $height) {
        $this->template = $this->createTemplate([
            'height' => $height
        ]);
    }
}