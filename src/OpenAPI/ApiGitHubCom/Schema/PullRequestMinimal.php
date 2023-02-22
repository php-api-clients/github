<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class PullRequestMinimal
{
    public const SCHEMA_JSON = '{"title":"Pull Request Minimal","required":["id","number","url","head","base"],"type":"object","properties":{"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string"},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}},"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $id;
    public ?int $number;
    public ?string $url;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Head $head;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Head $base;
    public function __construct(int $id, int $number, string $url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Head $head, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal\Head $base)
    {
        $this->id = $id;
        $this->number = $number;
        $this->url = $url;
        $this->head = $head;
        $this->base = $base;
    }
}
