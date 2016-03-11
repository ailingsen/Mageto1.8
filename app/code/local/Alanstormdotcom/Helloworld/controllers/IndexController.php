<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 16-3-10
 * Time: 下午5:06
 */
class Alanstormdotcom_Helloworld_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction()
    {
        echo'HelloWorld!';
    }

    public function goodbyeAction()
    {
        echo 'Goodbye World!';
    }
}