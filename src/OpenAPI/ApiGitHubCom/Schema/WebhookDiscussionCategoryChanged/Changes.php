<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDiscussionCategoryChanged;

final class Changes
{
    public const SCHEMA_JSON = '{"required":["category"],"type":"object","properties":{"category":{"required":["from"],"type":"object","properties":{"from":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'WebhookDiscussionCategoryChanged\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\Category $category;
    public function __construct(object $category)
    {
        $this->category = $category;
    }
}
