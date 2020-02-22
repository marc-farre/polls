<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\polls\permissions;

use humhub\libs\BasePermission;
use humhub\modules\space\models\Space;
use humhub\modules\user\models\User;

/**
 * CreatePost Permission
 */
class CreatePoll extends BasePermission
{

    /**
     * @inheritdoc
     */
    public $defaultAllowedGroups = [
        Space::USERGROUP_OWNER,
        Space::USERGROUP_ADMIN,
        Space::USERGROUP_MODERATOR,
        Space::USERGROUP_MEMBER,
        User::USERGROUP_SELF
    ];
    
    /**
     * @inheritdoc
     */
    protected $fixedGroups = [
        Space::USERGROUP_OWNER,
        Space::USERGROUP_ADMIN,
        Space::USERGROUP_USER,
        User::USERGROUP_SELF,
        User::USERGROUP_GUEST
    ];

    /**
     * @inheritdoc
     */
    protected $title = "Create poll";

    /**
     * @inheritdoc
     */
    protected $description = "Allows the user to create polls";

    /**
     * @inheritdoc
     */
    protected $moduleId = 'polls';

}
