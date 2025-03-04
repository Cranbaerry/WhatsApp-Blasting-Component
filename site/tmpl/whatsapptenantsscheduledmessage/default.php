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
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSSCHEDULEDMESSAGE_TARGET_PHONE_NUMBER'); ?></th>
			<td><?php echo $this->item->target_phone_number; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSSCHEDULEDMESSAGE_TEMPLATE_ID'); ?></th>
			<td><?php echo $this->item->template_id; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSSCHEDULEDMESSAGE_BLASTING_ID'); ?></th>
			<td><?php echo $this->item->blasting_id; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSSCHEDULEDMESSAGE_STATUS'); ?></th>
			<td><?php echo $this->item->status; ?></td>
		</tr>

		<tr>
			<th><?php echo Text::_('COM_DT_WHATSAPP_TENANTS_BLASTINGS_FORM_LBL_WHATSAPPTENANTSSCHEDULEDMESSAGE_RAW_RESPONSE'); ?></th>
			<td><?php echo nl2br($this->item->raw_response); ?></td>
		</tr>

	</table>

</div>

