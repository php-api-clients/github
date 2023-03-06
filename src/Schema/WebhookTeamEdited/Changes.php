<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookTeamEdited;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"privacy":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}},"repository":{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}},"description":"The changes to the team if the action was `edited`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the team if the action was `edited`.';
    public const SCHEMA_EXAMPLE_DATA = '{"description":{"from":"generated_from"},"name":{"from":"generated_from"},"privacy":{"from":"generated_from"},"repository":{"permissions":{"from":{"admin":false,"pull":false,"push":false}}}}';
    public function __construct(public ?Schema\WebhookLabelEdited\Changes\Description $description, public ?Schema\WebhookLabelEdited\Changes\Name $name, public ?Schema\WebhookTeamEdited\Changes\Privacy $privacy, public ?Schema\WebhookTeamEdited\Changes\Repository $repository)
    {
    }
}
