<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_balancirk
 *
 * @copyright   Copyright (C) 2022 CoCoCo. All rights reserved.
 * @license     GNU General Public License version 3.
 */

namespace CoCoCo\Component\Balancirk\Administrator\Table;

\defined('_JEXEC') or die;

//use Joomla\CMS\Factory;
use Joomla\CMS\Table\Table;
use Joomla\Database\DatabaseDriver;

/**
 * Lesson table class.
 *
 * @since  0.0.1
 */
class LessonsTable extends Table
{
    /**
     * Constructor
     *
     * @param   DatabaseDriver  $db  Database connector object
     *
     * @since   __BUMP_VERSION__
     */
    public function __construct(DatabaseDriver $db)
    {
        $this->typeAlias = 'com_balancirk.lessons';
        parent::__construct('#__balancirk_lessons_complete', 'id', $db);
    }
}
