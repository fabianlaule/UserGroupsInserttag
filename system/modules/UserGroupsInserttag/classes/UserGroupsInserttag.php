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


/**
 * Namespace
 */
namespace UserGroupsInserttag;


/**
 * Class UserGroupsInserttag
 *
 * @copyright  Fabian Laule 2013
 * @author     Fabian Laule <fabianlaule.de>
 * @license    LGPL
 * @package    UserGroupsInserttag
 */
class UserGroupsInserttag extends \Frontend
{
	public function replaceInserttag($strTag)
	{
		if (FE_USER_LOGGED_IN)
		{	
			if ('UserGroups' == $strTag)
			{
				$this->import(FrontendUser, User);
				$strGroups;
	
				foreach ($this->User->groups as $intGroup)
				{
					$objGroup = \MemberGroupModel::findPublishedById($intGroup);
	
					if ($strGroups === null)
					{
						$strGroups = $objGroup->name;
					}
					else
					{
						$strGroups .= ', ' . $objGroup->name;
					}
				}
				return $strGroups;
			}
		}
		return false;	
	}
}