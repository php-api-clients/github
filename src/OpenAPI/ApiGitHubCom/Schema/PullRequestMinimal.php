<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_JSON = '{"title":"Pull Request Minimal","required":["id","number","url","head","base"],"type":"object","properties":{"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string"},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}},"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private int $number;
    private string $url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C650E46F6982C8A8A4228F05E17A996F3::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C650E46F6982C8A8A4228F05E17A996F3 $head;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C650E46F6982C8A8A4228F05E17A996F3::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C650E46F6982C8A8A4228F05E17A996F3 $base;
    public function id() : int
    {
        return $this->id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function head() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C650E46F6982C8A8A4228F05E17A996F3
    {
        return $this->head;
    }
    public function base() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C650E46F6982C8A8A4228F05E17A996F3
    {
        return $this->base;
    }
}
