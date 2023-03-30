<?php

namespace MailTemplateDuck;

class Component
{
    protected string $template;

    public function create(): string
    {
        return $this->template;
    }

    protected function createTemplate(array $data = []): string
    {
        /*
         * Get name of caller class
         */
        $file_name = self::getTemplateName($this::class);

        /*
         * Get template file
         */
        $content = self::getTemplateContent($file_name);

        /*
         * Replace template variables
         */
        foreach($data as $key => $value)
            $content = str_replace('{{ ' . $key . ' }}', $value, $content);

        return $content;
    }

    /**
     * @throws \Exception
     */
    public static function getTemplateContent($file_name): string
    {
        if(!file_exists($file_name))
            throw new \Exception("Template file not found: " . $file_name);

        return file_get_contents($file_name, true);
    }

    private static function getTemplateName($class): string
    {
        $classPath = explode('\\', $class);
        $template_name = strtolower(preg_replace("/([a-z])([A-Z])/", "$1-$2", $classPath[count($classPath) - 1]));
        return __DIR__ . '/templates/' . $template_name . '.html';
    }
}