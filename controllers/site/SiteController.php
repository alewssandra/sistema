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

        $images = ['imagem1', 'imagem2', 'imagem3'];
        $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius duiLorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id, convallis iaculis eros. Praesent porta lacinia
        elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dolor turpis, pulvinar varius dui id, convallis iaculis eros. Praesent porta lacinia elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Pellentesque dolor turpis, pulvinar varius dui id, convallis iaculis eros. Praesent porta lacinia elementum.";

        $this->setLayout('site/shared/layout.php');

        $this->view('site/home/index.php', array(
            'images' => $images,
            'description' => $description
        ));
    }
}
