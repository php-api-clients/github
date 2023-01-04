<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Category
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"required":["id","repository_id","emoji","name","description","created_at","updated_at","slug","is_answerable"],"type":"object","properties":{"created_at":{"type":"string","format":"date-time"},"description":{"type":"string"},"emoji":{"type":"string"},"id":{"type":"integer"},"is_answerable":{"type":"boolean"},"name":{"type":"string"},"node_id":{"type":"string"},"repository_id":{"type":"integer"},"slug":{"type":"string"},"updated_at":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'Changes\\Category';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Category\From::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Category\From $from;
    public function from() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Category\From
    {
        return $this->from;
    }
}
