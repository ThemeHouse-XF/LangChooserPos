<?php

class ThemeHouse_LangChooserPos_Extend_XenForo_ControllerPublic_Login extends XFCP_ThemeHouse_LangChooserPos_Extend_XenForo_ControllerPublic_Login
{

    public function actionLogin()
    {
        if (!$this->_request->isPost()) {
            return $this->responseReroute('XenForo_ControllerPublic_Register', 'index');
        }
        return parent::actionLogin();
    } /* END actionLogin */
}