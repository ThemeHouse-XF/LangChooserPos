<?php

class ThemeHouse_LangChooserPos_Listener_ContainerPublicParams
{

    public static function containerPublicParams(array &$params, XenForo_Dependencies_Abstract $dependencies)
    {
        if (XenForo_Application::getOptions()->th_langChooserPos_position == 'bottom_left') {
            if (XenForo_Application::getOptions()->th_langChooserPos_override) {
                $params['canChangeLanguage'] = true;
            }
            return;
        }
        if (XenForo_Application::getOptions()->th_langChooserPos_override) {
            $params['thCanChangeLanguage'] = true;
        } else {
            $params['thCanChangeLanguage'] = $params['canChangeLanguage'];
        }
        $params['canChangeLanguage'] = false;
    } /* END containerPublicParams */
}
