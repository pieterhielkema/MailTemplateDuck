<?php
namespace MailTemplateDuck;

class MailTemplateDuck
{
    public static function create(array $components, array $options) {
        $base = file_get_contents(__DIR__ . '/templates/base.html', true);

        $contentHtml = "";

        foreach($components as $component) {
            $contentHtml .= $component->create();
        }

        if($contentHtml == "")
            return "No content found in email";

        $base = str_replace('{{ content }}', $contentHtml, $base);
        return $base;
    }
}