<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProtectedBranchRequiredStatusCheck
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Required Status Check","required":["contexts","checks"],"type":"object","properties":{"url":{"type":"string"},"enforcement_level":{"type":"string"},"contexts":{"type":"array","items":{"type":"string"}},"checks":{"type":"array","items":{"required":["context","app_id"],"type":"object","properties":{"context":{"type":"string"},"app_id":{"type":["integer","null"]}}}},"contexts_url":{"type":"string"},"strict":{"type":"boolean"}},"description":"Protected Branch Required Status Check"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Protected Branch Required Status Check';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Required Status Check';
    public readonly ?string $url;
    public readonly ?string $enforcement_level;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchRequiredStatusCheck\Contexts>
     */
    public readonly array $contexts;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchRequiredStatusCheck\Checks>
     */
    public readonly array $checks;
    public readonly ?string $contexts_url;
    public readonly ?bool $strict;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchRequiredStatusCheck\Contexts> $contexts
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranchRequiredStatusCheck\Checks> $checks
     */
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
