<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CB382E06B8099E759Ef95167A295E84Af
{
    public const SCHEMA_JSON = '{"required":["git","html","self"],"type":"object","properties":{"git":{"type":["string","null"],"format":"uri"},"html":{"type":["string","null"],"format":"uri"},"self":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_b382e06b8099e759ef95167a295e84af';
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
