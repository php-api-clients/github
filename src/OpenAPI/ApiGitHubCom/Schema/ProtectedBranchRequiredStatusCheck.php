<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts","checks"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    public string $url;
    public string $enforcement_level;
    public ?array $contexts;
    public ?array $checks;
    public string $contexts_url;
    public bool $strict;
    public function __construct(string $url, string $enforcement_level, array $contexts, array $checks, string $contexts_url, bool $strict)
    {
        $this->url = $url;
        $this->enforcement_level = $enforcement_level;
        $this->contexts = $contexts;
        $this->checks = $checks;
        $this->contexts_url = $contexts_url;
        $this->strict = $strict;
    }
}
