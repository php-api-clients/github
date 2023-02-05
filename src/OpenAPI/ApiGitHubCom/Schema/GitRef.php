<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitRef
{
    public const SCHEMA_JSON = '{"title":"Git Reference","required":["ref","node_id","url","object"],"type":"object","properties":{"ref":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"object":{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}},"description":"Git references within a repository"}';
    public const SCHEMA_TITLE = 'Git Reference';
    public const SCHEMA_DESCRIPTION = 'Git references within a repository';
    public readonly string $ref;
    public readonly string $node_id;
    public readonly string $url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitRef\Object_ $object;
    public function __construct(string $ref, string $node_id, string $url, object $object)
    {
        $this->ref = $ref;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->object = $object;
    }
}
