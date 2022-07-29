<?php

/*
 * This file is part of the YesWiki Extension securitypatch422.
 *
 * Authors : see README.md file that was distributed with this source code.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace YesWiki\Securitypatch422;

use YesWiki\Core\YesWikiHandler;

class __RssHandler extends YesWikiHandler
{
    public function run()
    {
        if (isset($_GET['id'])) {
            $id = filter_input(INPUT_GET, 'id', FILTER_UNSAFE_RAW);
            $id = ($id === false) ? "" : htmlspecialchars(strip_tags($id));
        } elseif (isset($_GET['id_typeannonce'])) {
            $id = filter_input(INPUT_GET, 'id_typeannonce', FILTER_UNSAFE_RAW);
            $id = ($id === false) ? "" : htmlspecialchars(strip_tags($id));
        }
        unset($_GET['id_typeannonce']);
        if (!empty($id) && strval($id) == strval(intval($id))) {
            $_GET['id'] = $id;
        } else {
            unset($_GET['id']);
            $id = '';
        }

        return "";
    }
}
