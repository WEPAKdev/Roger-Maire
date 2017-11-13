<?php
/**
 * Module d'ajout des categories de premier niveau sur la home page.
 * User: PAK
 * Date: 13/11/2017
 * Time: 00:54
 */
if (!defined('_PS_VERSION_'))
{
    exit;
}

class Homecategories extends Module
{

    public function __construct()
    {
        $this->name = 'homecategories';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Firstname Lastname';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Homecategories');
        $this->description = $this->l('Affiche les catégories de premier niveau dans la homepage');

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

        if (!Configuration::get('MYMODULE_NAME'))
            $this->warning = $this->l('No name provided');
    }

    public function install()
    {
        if (!parent::install())
            return false;
        $this->registerHook('displayHome');
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall())
            return false;
        return true;
    }

    public function hookDisplayHome($params)
    {
        $this->context->smarty->assign(
            array(
                'my_module_name' => Configuration::get('MYMODULE_NAME'),
                'my_module_link' => $this->context->link->getModuleLink('mymodule', 'display'),
                'test'           => 'yoo'
            )
        );
        return $this->display(__FILE__, 'homecategories.tpl');
    }
}