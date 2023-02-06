<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemReordered;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookProjectsV2ItemReordered\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PreviousProjectsV2ItemNodeId $previous_projects_v2_item_node_id;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PreviousProjectsV2ItemNodeId $previous_projects_v2_item_node_id)
    {
        $this->previous_projects_v2_item_node_id = $previous_projects_v2_item_node_id;
    }
}
