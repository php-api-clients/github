<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class PullRequests
{
    public const SCHEMA_JSON = '{"required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"number"},"number":{"type":"number"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'WorkflowRun\\PullRequests';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests\Base::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests\Base $base;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests\Head::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests\Head $head;
    private int $id;
    private int $number;
    private string $url;
    public function base() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests\Base
    {
        return $this->base;
    }
    public function head() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests\Head
    {
        return $this->head;
    }
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
}
