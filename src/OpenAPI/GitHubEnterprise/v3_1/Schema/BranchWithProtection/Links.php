<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\BranchWithProtection;

final class Links
{
    public const SCHEMA_JSON = '{"required":["html","self"],"type":"object","properties":{"html":{"type":"string"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'BranchWithProtection\\Links';
    public const SCHEMA_DESCRIPTION = '';
    private string $html;
    private string $self;
    public function html() : string
    {
        return $this->html;
    }
    public function self() : string
    {
        return $this->self;
    }
}
