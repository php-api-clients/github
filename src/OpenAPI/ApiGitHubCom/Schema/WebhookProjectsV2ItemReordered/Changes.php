<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemReordered;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMemberEdited\Changes\Permission;

final readonly class Changes
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Permission $previous_projects_v2_item_node_id;

    public function __construct(Permission $previous_projects_v2_item_node_id)
    {
        $this->previous_projects_v2_item_node_id = $previous_projects_v2_item_node_id;
    }
}
