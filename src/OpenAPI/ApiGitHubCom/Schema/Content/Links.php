<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Content;

final class Links
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"self":{"type":"string"},"git":{"type":"string"},"html":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Content\\Links';
    public const SCHEMA_DESCRIPTION = '';
    private string $self;
    private string $git;
    private string $html;
    public function self() : string
    {
        return $this->self;
    }
    public function git() : string
    {
        return $this->git;
    }
    public function html() : string
    {
        return $this->html;
    }
}
