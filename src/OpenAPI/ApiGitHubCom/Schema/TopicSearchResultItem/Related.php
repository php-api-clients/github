<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TopicSearchResultItem;

final class Related
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"topic_relation":{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'TopicSearchResultItem\\Related';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Related\TopicRelation::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Related\TopicRelation $topic_relation;
    public function topic_relation() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Related\TopicRelation
    {
        return $this->topic_relation;
    }
}
