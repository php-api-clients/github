<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"previous_projects_v2_item_node_id":{"from":"generated_from","to":"generated_to"}}';
    public function __construct(public ?Schema\WebhookMemberEdited\Changes\Permission $previous_projects_v2_item_node_id)
    {
    }
}
