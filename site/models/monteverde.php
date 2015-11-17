<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * HelloWorld Model
 *
 * @since  0.0.1
 */
class MonteVerdeModelMonteVerde extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;
 
	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		if (!isset($this->message))
		{
        $jinput = JFactory::getApplication()->input;
        $id     = $jinput->get('id', 1, 'INT'); 			
        switch ($id)			
        {				
            case 2:
                $this->message = 'Opção 2 selecionada!';
                break;				
            default:
            case 1:
                $this->message = 'Selecionaram a 1 ou nenhuma!';
                break;
        }
		}
 
		return $this->message;
	}
}