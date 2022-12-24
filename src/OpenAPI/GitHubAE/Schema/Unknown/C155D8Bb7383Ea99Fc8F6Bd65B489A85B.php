<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C155D8Bb7383Ea99Fc8F6Bd65B489A85B
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"base":{"required":["ref","sha"],"type":"object","properties":{"ref":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}},"sha":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}},"body":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the body if the action was `edited`."}}},"title":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the title if the action was `edited`."}}}},"description":"The changes to the comment if the action was `edited`."}';
    public const SCHEMA_TITLE = 'c_155d8bb7383ea99fc8f6bd65b489a85b';
    public const SCHEMA_DESCRIPTION = 'The changes to the comment if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C193A3Accb6B7E31B42D1787E4756220F::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C193A3Accb6B7E31B42D1787E4756220F $base;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D $body;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac3402Ac1416C73B92827C1E5472178::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac3402Ac1416C73B92827C1E5472178 $title;
    public function base() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C193A3Accb6B7E31B42D1787E4756220F
    {
        return $this->base;
    }
    public function body() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CD089D861B45Dbc8A01D7B6A7A81C5C0D
    {
        return $this->body;
    }
    public function title() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C5Ac3402Ac1416C73B92827C1E5472178
    {
        return $this->title;
    }
}
