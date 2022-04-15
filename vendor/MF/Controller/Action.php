<?php

namespace MF\Controller;

abstract class Action {

    public function view($file, $data = []): string
    {
        $loader = new \Twig\Loader\FilesystemLoader("../App/Views/");

        $twig = new \Twig\Environment($loader);

        $template = $twig->load("{$file}.html");

        return $template->render($data);
    }
}