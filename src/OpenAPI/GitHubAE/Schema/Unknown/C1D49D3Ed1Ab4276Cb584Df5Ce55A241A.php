<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C1D49D3Ed1Ab4276Cb584Df5Ce55A241A
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}}}}';
    public const SCHEMA_TITLE = 'c_1d49d3ed1ab4276cb584df5ce55a241a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161 $name;
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D
    {
        return $this->body;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161
    {
        return $this->name;
    }
}
