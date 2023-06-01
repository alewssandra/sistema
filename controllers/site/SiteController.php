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

    public function local()
    {
        $this->setLayout('site/shared/layout.php');
        $this->view('site/local/index.php');
    }

    public function planos()
    {
        $this->setLayout('site/shared/layout.php');
        $this->view('site/planos/index.php');
    }

    public function inscricao()
    {
        $this->setLayout('site/shared/layout.php');
        $this->view('site/inscricao/index.php');
    }
}
