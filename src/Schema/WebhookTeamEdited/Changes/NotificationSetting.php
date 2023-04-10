<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookTeamEdited\Changes;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class NotificationSetting
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s notification setting if the action was `edited`."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"from":"generated_from_null"}';
    /**
     * from: The previous version of the team's notification setting if the action was `edited`.
     */
    public function __construct(public string $from)
    {
    }
}
