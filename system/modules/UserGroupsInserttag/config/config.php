<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   UserGroupsInserttag
 * @author    Fabian Laule <fabianlaule.de>
 * @license   LGPL
 * @copyright Fabian Laule 2013
 */

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('UserGroupsInserttag', 'replaceInserttag');