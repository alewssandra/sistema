<?php

/**
 * Controlador responsável pela página inicial do site.
 */
class SiteController extends Controller
{

    /**
     * Ação para exibir a página inicial do site.
     */
    public function home()
    {

        $this->setLayout('site/shared/layout.php');

        $this->view('site/home/index.php');
    }

    public function contato()
    {
        $this->setLayout('site/shared/layout.php');
        $this->view('site/contato/index.php');
    }
}
