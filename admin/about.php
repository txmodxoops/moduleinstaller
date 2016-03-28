<?php
/**
 * Module Installer module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright    XOOPS Project (http://xoops.org)
 * @license      {@link http://www.gnu.org/licenses/gpl-2.0.html GNU Public License}
 * @package      ModuleInstaller
 * @since        2.5.0
 * @author       XOOPS Development Team
 **/
include_once __DIR__ . '/admin_header.php';

xoops_cp_header();

$aboutAdmin = new ModuleAdmin();

echo $aboutAdmin->addNavigation(basename(__FILE__));
echo $aboutAdmin->renderAbout('6KJ7RW5DR3VTJ', false);

include_once __DIR__ . '/admin_footer.php';
