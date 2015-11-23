<?php

class ThemeHouse_LangChooserPos_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_LangChooserPos' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Login',
                ), /* END 'controller' */
            ), /* END 'ThemeHouse_LangChooserPos' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_LangChooserPos_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */
}