<?php

namespace app\traits;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use app\src\Load;

trait View
{
    protected $twig;

    protected function twig()
    {
        $loader = new FilesystemLoader('../app/views');
        $this->twig = new Environment($loader, [
            // 'cache'=>'',
            'debug' => true,
        ]);
    }

    protected function functions()
    {
        $functions = Load::file('/app/functions/twig.php');

        foreach ($functions as $function) {
            $this->twig->addFunction($function);
        }
    }

    protected function load()
    {
        $this->twig();
        $this->functions();
    }

    protected function view(string $view, array $data = [])
    {
        $this->load();

        $template = $this->twig->loadTemplate(
            str_replace('.', '/', $view) . '.html.twig'
        );
        return $template->display($data);
    }
}
