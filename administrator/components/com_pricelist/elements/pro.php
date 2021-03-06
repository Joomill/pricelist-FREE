<?php
/*
 *  package: Joomla Price List component
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

class JFormFieldPRO extends JFormField
{
    protected $type = 'pro';

    protected function getInput()
    {
        $text = Text::_('COM_PRIICELIST_PRO_ONLY');
        return
            '<code>' . $text . '</code>';
    }


}
