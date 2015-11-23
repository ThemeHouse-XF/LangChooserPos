<?php

class ThemeHouse_LangChooserPos_Listener_TemplateHook extends ThemeHouse_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'footer_links',
            'navigation_visitor_tabs_end'
        );
    } /* END _getHooks */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new ThemeHouse_LangChooserPos_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END templateHook */

    protected function _footerLinks()
    {
        $position = XenForo_Application::getOptions()->th_langChooserPos_position;
        if ($position == 'bottom_right') {
            $this->_prependTemplate('th_bottom_right_langchooserpos');
        }
    } /* END _footerLinks */

    protected function _navigationVisitorTabsEnd()
    {
        $position = XenForo_Application::getOptions()->th_langChooserPos_position;
        if ($position == 'top_right') {
            $this->_prependTemplate('th_top_right_langchooserpos');
        }
    } /* END _navigationVisitorTabsEnd */
}