<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PullRequestMinimal
{
    public const SCHEMA_JSON = '{"title":"Pull Request Minimal","required":["id","number","url","head","base"],"type":"object","properties":{"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string"},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}},"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly int $number;
    public readonly string $url;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Head $head;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Base $base;
    public function __construct(int $id, int $number, string $url, object $head, object $base)
    {
        $this->id = $id;
        $this->number = $number;
        $this->url = $url;
        $this->head = $head;
        $this->base = $base;
    }
}
