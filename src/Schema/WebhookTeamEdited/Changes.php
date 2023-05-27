<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookTeamEdited;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"privacy":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}},"notification_setting":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s notification setting if the action was `edited`."}}},"repository":{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}},"description":"The changes to the team if the action was `edited`."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The changes to the team if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"description":{"from":"generated"},"name":{"from":"generated"},"privacy":{"from":"generated"},"notification_setting":{"from":"generated"},"repository":{"permissions":{"from":{"admin":false,"pull":false,"push":false}}}}';

    public function __construct(public ?Schema\WebhookTeamEdited\Changes\Description $description, public ?Schema\WebhookTeamEdited\Changes\Name $name, public ?Schema\WebhookTeamEdited\Changes\Privacy $privacy, #[MapFrom('notification_setting')] public ?Schema\WebhookTeamEdited\Changes\NotificationSetting $notificationSetting, public ?Schema\WebhookTeamEdited\Changes\Repository $repository)
    {
    }
}
