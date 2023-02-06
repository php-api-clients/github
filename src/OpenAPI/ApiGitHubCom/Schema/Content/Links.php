<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Content;

final class Links
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Content\\Links';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $self;
    public readonly string $git;
    public readonly string $html;
    public function __construct(string $self, string $git, string $html)
    {
        $this->self = $self;
        $this->git = $git;
        $this->html = $html;
    }
}
