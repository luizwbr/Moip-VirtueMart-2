<?php
defined('_JEXEC') or die();

/**
 *
 * @package	VirtueMart
 * @subpackage Plugins  - Elements
 * @author Valérie Isaksen
 * @link http://www.virtuemart.net
 * @copyright Copyright (c) 2004 - 2011 VirtueMart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * @version $Id: $
 */
/*
 * This class is used by VirtueMart Payment or Shipment Plugins
 * which uses JParameter
 * So It should be an extension of JElement
 * Those plugins cannot be configured througth the Plugin Manager anyway.
 */
class JElementVmAbout extends JElement {

    /**
     * Element name
     * @access	protected
     * @var		string
     */
    var $_name = 'About';

    function fetchElement($name, $value, &$node, $control_name) {
        $doc = JFactory::getDocument();
		$html = '<div style="float:left">
				<img src="'.JURI::root().$node->attributes('path').DS.'logo_moip.png" border="0"/><br />
				<h1> MoIP VirtueMart 2.0 - Checkout Transparente</h1>
				<div>Solicitações, atualizações e notícias sobre o projeto: <a href="http://virtuemartpro.com.br/tutoriais/virtuemart-2-0/item/27-moip-para-virtuemart-2.html">VirtueMart PRO</a> </div>
				<div>Repositório do projeto: <a href="https://github.com/luizwbr/Moip-Virtuemart2">https://github.com/luizwbr/Moip-Virtuemart2</a> </div>
		</div>';
        return $html;
    }

}