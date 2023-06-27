<?php

class ContactsController extends Controller
{

    /**
     * Ação para remover um contato.
     */
    public function removeContact()
    {
        $id = $_POST['id'];

        $result = new ContactsCrud;
        $result = $result->removeContact($id);

        echo json_encode(array(
            'result' => $result
        ));
    }

    /**
     * Ação para obter os detalhes de um contato.
     */
    public function getContact(){

        $id = $_POST['id'];

        $admin_id = $this->helpers['AdminSession']->get('id');

        $result = new ContactsData;
        $result = $result->getContact($id, $admin_id);

        echo json_encode(array(
            'result' => $result
        ));

    }
}
