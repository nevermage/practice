<?php

namespace Classes;

class View
{
    private $templatesPath;

    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }
    public function renderHtml(string $templateName, array $vars = [], $code = 200)
    {
        http_response_code($code);
        extract($vars);

        ob_start();
        include $this->templatesPath . '/' . $templateName;
        $buf = ob_get_contents();
        ob_end_clean();
        echo $buf;
    }
}
