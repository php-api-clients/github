<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CA3492Cd3C6790A9Deda16C613A3C6Daa
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The changes to the project if the action was `edited`."}}}},"description":"The changes to the project if the action was `edited`."}';
    public const SCHEMA_TITLE = 'c_a3492cd3c6790a9deda16c613a3c6daa';
    public const SCHEMA_DESCRIPTION = 'The changes to the project if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCe6Dee42544E914E76B2Cd1C185815E1::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCe6Dee42544E914E76B2Cd1C185815E1 $name;
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D
    {
        return $this->body;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCe6Dee42544E914E76B2Cd1C185815E1
    {
        return $this->name;
    }
}
