<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class IssueEventLabel
{
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SPL_HASH = '0000000008b921d100000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    private ?string $name = null;
    private ?string $color = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function color() : ?string
    {
        return $this->color;
    }
}
