<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMemberEdited;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    public const SCHEMA_EXAMPLE_DATA = '{"old_permission":{"from":"generated_from"},"permission":{"from":"generated_from","to":"generated_to"}}';
    public function __construct(public ?Schema\WebhookMemberEdited\Changes\OldPermission $old_permission, public ?Schema\WebhookMemberEdited\Changes\Permission $permission)
    {
    }
}
