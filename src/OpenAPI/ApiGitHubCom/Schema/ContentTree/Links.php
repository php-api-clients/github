<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContentTree;

final class Links
{
    public const SCHEMA_JSON = '{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'ContentTree\\Links';
    public const SCHEMA_DESCRIPTION = '';
    private $git;
    private $html;
    private string $self;
    public function git()
    {
        return $this->git;
    }
    public function html()
    {
        return $this->html;
    }
    public function self() : string
    {
        return $this->self;
    }
}
