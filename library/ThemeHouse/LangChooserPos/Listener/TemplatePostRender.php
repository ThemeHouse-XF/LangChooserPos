<?php

class ThemeHouse_LangChooserPos_Listener_TemplatePostRender extends ThemeHouse_Listener_TemplatePostRender
{
    protected function _getTemplates()
    {
        return array(
            'PAGE_CONTAINER',
        );
    } /* END _getTemplates */

    public static function templatePostRender($templateName, &$content, array &$containerData, XenForo_Template_Abstract $template)
    {
        $templatePostRender = new ThemeHouse_LangChooserPos_Listener_TemplatePostRender($templateName, $content, $containerData, $template);
        list($content, $containerData) = $templatePostRender->run();
    } /* END templatePostRender */

    protected function _pageContainer()
    {
        $position = XenForo_Application::getOptions()->th_langChooserPos_position;
        if ($position == 'top_right' && !XenForo_Visitor::getUserId()) {
            $pattern = '#</div>\s*<span class="helper"></span>\s*</nav>#s';
            $this->_prependTemplateAtPattern($pattern, 'th_navigation_visitor_tabs_langchooserpos');
        }
    } /* END _pageContainer */
}