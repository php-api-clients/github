<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ItemReordered;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"previous_projects_v2_item_node_id":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'WebhookProjectsV2ItemReordered\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PreviousProjectsV2ItemNodeId::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PreviousProjectsV2ItemNodeId $previous_projects_v2_item_node_id;
    public function previous_projects_v2_item_node_id() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\PreviousProjectsV2ItemNodeId
    {
        return $this->previous_projects_v2_item_node_id;
    }
}
