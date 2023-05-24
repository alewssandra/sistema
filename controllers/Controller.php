<?php 

/**
 * Classe abstrata Controller
 * 
 * Classe base para os controladores do sistema.
 */
abstract class Controller
{
    /**
     * @var string|null O nome do layout utilizado nas visualizações.
     */
    private $layout;

    /**
     * @var array Um array contendo os helpers utilizados pelo controlador.
     */
    protected $helpers;

    /**
     * Construtor da classe Controller.
     * 
     * @param array $helpers Um array contendo os helpers a serem utilizados pelo controlador.
     */
    public function __construct(array $helpers = array())
    {
        $this->helpers = $helpers;
    }

    /**
     * Define o layout a ser utilizado nas visualizações.
     * 
     * @param string $filename O nome do arquivo de layout.
     */
    protected function setLayout($filename)
    {
        $this->layout = $filename;
    }

    /**
     * Renderiza uma visualização.
     * 
     * @param string $filename O nome do arquivo de visualização.
     * @param array $data Um array contendo os dados a serem passados para a visualização.
     */
    protected function view($filename, array $data = array())
    {
        $path = ROOT . '/views/';
        $file = $path . $filename;

        extract($data);

        if (!is_null($this->layout)) {
            return require $path . $this->layout;
        }

        require $file;
    }

    /**
     * Obtém o ID a partir dos parâmetros passados.
     * 
     * @param array $parameters Os parâmetros passados.
     * @return int O ID extraído dos parâmetros.
     */
    protected function getId(array $parameters)
    {
        $this->helpers['URLHelpers']->checkId($parameters, $this->helpers['URLHelper']->getURL('404'));
        $id = (int) $parameters[0];

        return $id;
    }
}
