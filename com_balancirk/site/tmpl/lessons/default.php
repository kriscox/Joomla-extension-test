<?php

/**
 * @package     Joomla.Site
 * @subpackage  com_balancirk
 *
 * @copyright   Copyright (C) 2022 CoCoCo. All rights reserved.
 * @license     GNU General Public License version 3.
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;
use Joomla\CMS\Layout\LayoutHelper;

$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn  = $this->escape($this->state->get('list.direction'));

?>

<alert>Not yet implemented</alert>
<?php echo JHtml::_('content.prepare', '{loadposition balancirk-top}'); ?>
<?php echo JHtml::_('content.prepare', '{loadposition balancirk-lessons-top}'); ?>
<form action=" <?= Route::_('index.php?option=com_balancirk&view=lessons'); ?>" method="post" name="adminForm" id="adminForm">
	<div class="row">
		<nav aria-label="Toolbar" style="display: flex; align-items: center;">
			<div class="col-md-6">
				<?= LayoutHelper::render('lessons.filter', array('view' => $this)); ?>
			</div>
		</nav>
		<div class="col-md-12">
			<div id="j-main-container" class="j-main-container">
				<?php if (empty($this->items)) : ?>
					<div class="alert alert-info">
						<span class="fa fa-info-circle" aria-hidden="true"></span><span class="sr-only"><?= Text::_('INFO'); ?></span>
						<?= Text::_('JGLOBAL_NO_MATCHING_RESULTS'); ?>
					</div>
				<?php else : ?>
					<table class="table" id="memberList">
						<thead>
							<tr>
								<th scope="col" style="width:10px" class="hidden text-center d-none d-md-table-cell">
									<?= Text::_('COM_BALANCIRK_TABLE_TABLEHEAD_ID'); ?>
								</th>
								<th scope="col" style="width:10px" class="text-center d-none d-md-table-cell">
									<?= HTMLHelper::_('searchtools.sort', 'COM_BALANCIRK_TABLE_TABLEHEAD_NAME', 'a.name', $listDirn,  $listOrder); ?>
								</th>
								<th scope="col" style="width:10px" class="text-center d-none d-md-table-cell">
									<?= HTMLHelper::_('searchtools.sort', 'COM_BALANCIRK_TABLE_TABLEHEAD_TYPE', 'a.type', $listDirn, $listOrder); ?>
								</th>
								<th scope="col" style="width:10px" class="text-center d-none d-md-table-cell">
									<?= HTMLHelper::_('searchtools.sort', 'COM_BALANCIRK_TABLE_TABLEHEAD_FEE', 'a.fee', $listDirn, $listOrder); ?>
								</th>
								<th scope="col" style="width:10px" class="text-center d-none d-md-table-cell">
									<?= HTMLHelper::_('searchtools.sort', 'COM_BALANCIRK_TABLE_TABLEHEAD_YEAR', 'a.year', $listDirn, $listOrder); ?>
								</th>
								<th scope="col" style="width:1%" class="text-center d-none d-md-table-cell">
									<?= HTMLHelper::_('searchtools.sort', 'COM_BALANCIRK_TABLE_TABLEHEAD_SUBSCRIPTIONS', 'a.numberOfStudents', $listDirn, $listOrder); ?>
								</th>
								<th scope="col" style="width:1%" class="text-center d-none d-md-table-cell">
									<?= HTMLHelper::_('searchtools.sort', 'COM_BALANCIRK_TABLE_TABLEHEAD_STATE', 'a.state', $listDirn, $listOrder); ?>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$n = count($this->items);

							foreach ($this->items as $i => $item) :
							?>
								<tr class="row<?= $i % 2; ?>">
									<td class="hidden d-none d-md-table-cell text-center">
										<?= $item->id; ?>
									</td>
									<th scope="row" class="has-context">
										<?php if ($this->canDo->get('lessons.register')) : ?>
											<a class="hasTooltip" href="<?= Route::_('index.php?option=com_balancirk&view=lesson&layout=default&id=' . $item->id); ?>">
											<?php endif ?>

											<?= $this->escape(addslashes($item->name)) ?>

											<?php if ($this->canDo->get('lessons.register')) : ?>
											</a>
										<?php endif ?>
									</th>
									<th scope="row" class="has-context">
										<?= $this->escape($item->type); ?>
									</th>
									<th scope="row" class="has-context">
										<?= $this->escape($item->fee); ?>
									</th>
									<th scope="row" class="has-context">
										<?= $this->escape($item->year) ?>
									</th>
									<th scope="row" class="has-context">
										<?= $this->escape($item->numberOfStudents); ?>
									</th>
									<th scope="row" class="has-context">
										<?= $this->escape($item->state); ?>
									</th>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

				<?php endif; ?>
				<input type="hidden" name="task" value="">
				<input type="hidden" name="boxchecked" value="0">
				<?= HTMLHelper::_('form.token'); ?>
			</div>
		</div>
	</div>
	<?php echo JHtml::_('content.prepare', '{loadposition balancirk-lessons-bottom}'); ?>
	<?php echo JHtml::_('content.prepare', '{loadposition balancirk-bottom}'); ?>