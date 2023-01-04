<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Related;

final class TopicRelation
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"topic_id":{"type":"integer"},"relation_type":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Related\\TopicRelation';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $name;
    private int $topic_id;
    private string $relation_type;
    public function id() : int
    {
        return $this->id;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function topic_id() : int
    {
        return $this->topic_id;
    }
    public function relation_type() : string
    {
        return $this->relation_type;
    }
}
