<?php

class ThemeHouse_LangChooserPos_Listener_TemplateCreate extends ThemeHouse_Listener_TemplateCreate
{

    protected function _getTemplates()
    {
        return array(
            'PAGE_CONTAINER'
        );
    } /* END _getTemplates */

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new ThemeHouse_LangChooserPos_Listener_TemplateCreate($templateName, $params, $template);
        list ($templateName, $params) = $templateCreate->run();
    } /* END templateCreate */

    protected function _pageContainer()
    {
        $position = XenForo_Application::getOptions()->th_langChooserPos_position;
        if ($position == 'top_right') {
            if (XenForo_Visitor::getUserId()) {
                $this->_preloadTemplate('th_top_right_langchooserpos');
            } else {
                $this->_preloadTemplate('th_navigation_visitor_tabs_langchooserpos');
            }
        }
        if ($position == 'bottom_right') {
            $this->_preloadTemplate('th_bottom_right_langchooserpos');
        }
    } /* END _pageContainer */
}