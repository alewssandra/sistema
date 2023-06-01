<?php 

// Rotas comuns para requisições GET
$commonRoutes = array(
    '/'                             => 'SiteController/home',
    'contato'                       => 'SiteController/contato',
    'local'                         => 'SiteController/local',
    'planos'                        => 'SiteController/planos',
    'inscricao'                     => 'SiteController/inscricao',
    'dashboard'                     => 'PanelController/home',
    'dashboard/login'               => 'PanelController/login',
    'logout'                        => 'PanelController/logout',
    'dashboard/contatos'            => 'PanelController/contacts',
    'dashboard/pessoas'             => 'PanelController/users',
    'dashboard/pessoa-adicionar'    => 'PanelController/addUser',
    'dashboard/pessoa-editar'       => 'PanelController/editUser',
);

// Rotas comuns para requisições POST
$commonPost = array(
    'submitform'        => 'SiteCheckController/submitform',
    'validateuser'      => 'AdminCheckController/validateuser',
    'userlogin'         => 'AdminCheckController/userlogin',
    'removeContact'     => 'ContactsController/removeContact',
    'getContact'        => 'ContactsController/getContact',
    'removePerson'      => 'UsersController/removePerson',
    'submituser'        => 'UsersController/submituser',
    'validateemail'     => 'UsersCheckController/validateemail',
    'validadecpfuser'   => 'UsersCheckController/validadecpfuser',
);

// Combina as rotas comuns para GET e POST em um único array
$commonRoutes = array_merge($commonRoutes, $commonPost);

// Retorna o array de rotas
return $commonRoutes;
?>