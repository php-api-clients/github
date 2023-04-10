<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookProjectsV2ItemReordered;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"previous_projects_v2_item_node_id":{"from":"generated_from_null","to":"generated_to_null"}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('previous_projects_v2_item_node_id')] public ?Schema\WebhookProjectsV2ItemReordered\Changes\PreviousProjectsV2ItemNodeId $previousProjectsV2ItemNodeId)
    {
    }
}
