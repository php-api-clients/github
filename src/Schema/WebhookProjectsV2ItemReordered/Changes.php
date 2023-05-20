<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookProjectsV2ItemReordered;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Changes
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"previous_projects_v2_item_node_id":{"from":"generated","to":"generated"}}';

    public function __construct(#[MapFrom('previous_projects_v2_item_node_id')] public ?Schema\WebhookMemberEdited\Changes\Permission $previousProjectsVTwoItemNodeId)
    {
    }
}
