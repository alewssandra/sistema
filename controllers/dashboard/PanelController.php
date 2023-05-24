<?php

/**
 * Class PanelController
 * 
 * Controller responsável por lidar com as ações relacionadas ao painel de administração.
 */
class PanelController extends Controller
{

    /**
     * Renderiza a página inicial do painel de administração.
     */
    public function home()
    {
        if ($this->helpers['AdminSession']->has()) {
            $this->setLayout('dashboard/shared/layout.php');
            $this->view('dashboard/home/index.php');
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard/login'));
        }
    }

    /**
     * Renderiza a página de login do painel de administração.
     */
    public function login()
    {
        if (!$this->helpers['AdminSession']->has()) {
            $this->view('dashboard/login/index.php');
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard'));
        }
    }

    /**
     * Renderiza a página de contatos do painel de administração.
     */
    public function contacts()
    {
        if ($this->helpers['AdminSession']->has()) {
            $contacts = new ContactsData;
            $contacts = $contacts->getContacts();

            $this->setLayout('dashboard/shared/layout.php');
            $this->view('dashboard/contacts/index.php', array(
                'contatos' => $contacts
            ));
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard/login'));
        }
    }

    /**
     * Renderiza a página de usuários do painel de administração.
     */
    public function users()
    {
        if ($this->helpers['AdminSession']->has()) {
            $persons = new PersonsData;
            $persons = $persons->getPersons();

            $this->setLayout('dashboard/shared/layout.php');
            $this->view('dashboard/users/index.php', array(
                'pessoas' => $persons
            ));
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard/login'));
        }
    }

    /**
     * Renderiza a página de adição de usuário do painel de administração.
     */
    public function addUser()
    {
        if ($this->helpers['AdminSession']->has()) {
            $this->setLayout('dashboard/shared/layout.php');
            $this->view('dashboard/users/add.php');
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard/login'));
        }
    }

    /**
     * Renderiza a página de edição de usuário do painel de administração.
     *
     * @param array $params Parâmetros da URL, contendo o ID do usuário a ser editado.
     */
    public function editUser(array $params)
    {
        if ($this->helpers['AdminSession']->has()) {
            $id = $params[0];

            $person = new PersonsData;
            $person = $person->getPerson($id);

            $this->setLayout('dashboard/shared/layout.php');
            $this->view('dashboard/users/edit.php', array(
                'person' => $person
            ));
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard/login'));
        }
    }

    /**
     * Realiza o logout do painel de administração.
     */
    public function logout()
    {
        if ($this->helpers['AdminSession']->has()) {
            $this->helpers['AdminSession']->delete();
            header('Location: ' . $this->helpers['URLHelper']->getURL('/'));
            exit;
        } else {
            header('Location: ' . $this->helpers['URLHelper']->getURL('/dashboard/login'));
            exit;
        }
    }
}
