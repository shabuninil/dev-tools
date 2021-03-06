<?php
/**
 * Dev Tools - a very simple web application to integrate web developer tools.
 *
 * Copyright (C) 2014  Shabunin Igor
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 *
 * @author: Shabunin Igor
 * @see: https://github.com/shinji00/dev-tools
 * @see: http://dev-tools.org
 */

require_once 'classes/Init.php';


try {
    $init = new \Classes\Init();
    echo $init->dispatch();

} catch (Exception $e) {
    echo '<pre>';
    echo $e->getMessage(), "\n";
    echo '<b>', $e->getFile(), ': ', $e->getLine(), "</b>\n\n";
    echo $e->getTraceAsString();
    echo '</pre>';
}
