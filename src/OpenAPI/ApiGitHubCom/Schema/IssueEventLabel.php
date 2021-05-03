<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventLabel
{
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SPL_HASH = '00000000084e13900000000020f58f84';
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
