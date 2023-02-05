<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Related;

final class TopicRelation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Related\\TopicRelation';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly string $name;
    public readonly int $topic_id;
    public readonly string $relation_type;
    public function __construct(int $id, string $name, int $topic_id, string $relation_type)
    {
        $this->id = $id;
        $this->name = $name;
        $this->topic_id = $topic_id;
        $this->relation_type = $relation_type;
    }
}
