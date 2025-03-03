<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Dt_whatsapp_tenants_blastings
 * @author     dreamztech <support@dreamztech.com.my>
 * @copyright  2025 dreamztech
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

use \Joomla\CMS\HTML\HTMLHelper;
use \Joomla\CMS\Factory;
use \Joomla\CMS\Uri\Uri;
use \Joomla\CMS\Router\Route;
use \Joomla\CMS\Language\Text;
use \Joomla\CMS\Session\Session;
use Joomla\Utilities\ArrayHelper;


?>

<div class="item_fields">
<?php if ($this->params->get('show_page_heading')) : ?>
    <div class="page-header">
        <h1> <?php echo $this->escape($this->params->get('page_heading')); ?> </h1>
    </div>
    <?php endif;?>
	<table class="table">
		

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSCONTACT_DISPLAYNAME'); ?></th>
			<td><?php echo $this->item->displayname; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSCONTACT_PHONENUMBER'); ?></th>
			<td><?php echo $this->item->phonenumber; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSCONTACT_WHATSAPPID'); ?></th>
			<td><?php echo $this->item->whatsappid; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSCONTACT_QUALITY_RATING'); ?></th>
			<td><?php echo $this->item->quality_rating; ?></td>
		</tr>

	</table>

</div>

