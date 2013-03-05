<?php

/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Gbase
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: SnippetFeed.php,v 1.1 2011/08/01 19:28:45 eldy Exp $
 */

/**
 * @see Zend_Gdata_Gbase_Feed
 */
require_once 'Zend/Gdata/Gbase/Feed.php';

/**
 * Represents the Google Base Snippets Feed
 *
 * @link http://code.google.com/apis/base/
 *
 * @category   Zend
 * @package    Zend_Gdata
 * @subpackage Gbase
 * @copyright  Copyright (c) 2005-2011 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Gdata_Gbase_SnippetFeed extends Zend_Gdata_Feed
{
    /**
     * The classname for individual snippet feed elements.
     *
     * @var string
     */
    protected $_entryClassName = 'Zend_Gdata_Gbase_SnippetEntry';
}
