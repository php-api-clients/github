<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookMemberEdited;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    public const SCHEMA_EXAMPLE_DATA = '{"old_permission":{"from":"generated_from_null"},"permission":{"from":"generated_from_null","to":"generated_to_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('old_permission')] public ?Schema\WebhookMemberEdited\Changes\OldPermission $oldPermission, public ?Schema\WebhookMemberEdited\Changes\Permission $permission)
    {
    }
}
