<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\BranchWithProtection;

final class Links
{
    public const SCHEMA_JSON = '{"required":["html","self"],"type":"object","properties":{"html":{"type":"string"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'BranchWithProtection\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $html;
    public readonly string $self;
    public function __construct(string $html, string $self)
    {
        $this->html = $html;
        $this->self = $self;
    }
}
