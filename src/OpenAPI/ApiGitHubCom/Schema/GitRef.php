<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitRef
{
    public const SCHEMA_JSON = '{"title":"Git Reference","required":["ref","node_id","url","object"],"type":"object","properties":{"ref":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string","format":"uri"},"object":{"required":["type","sha","url"],"type":"object","properties":{"type":{"type":"string"},"sha":{"maxLength":40,"minLength":40,"type":"string","description":"SHA for the reference","examples":["7638417db6d59f3c431d3e1f261cc637155684cd"]},"url":{"type":"string","format":"uri"}}}},"description":"Git references within a repository"}';
    public const SCHEMA_TITLE = 'Git Reference';
    public const SCHEMA_DESCRIPTION = 'Git references within a repository';
    private string $ref;
    private string $node_id;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEdd208D35D703001Ff634C64Cd72C6E1::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEdd208D35D703001Ff634C64Cd72C6E1 $object;
    public function ref() : string
    {
        return $this->ref;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function object() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CEdd208D35D703001Ff634C64Cd72C6E1
    {
        return $this->object;
    }
}
