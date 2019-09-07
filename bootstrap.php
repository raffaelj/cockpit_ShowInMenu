<?php
/**
 * Show items in menu in Cockpit CMS
 * 
 * @see       https://github.com/raffaelj/cockpit_ShowInMenu
 * @see       https://github.com/agentejo/cockpit/
 * 
 * @version   0.1.0
 * @author    Raffael Jesche
 * @license   MIT
 */

if (COCKPIT_ADMIN && !COCKPIT_API_REQUEST) {
    include_once(__DIR__ . '/admin.php');
}
