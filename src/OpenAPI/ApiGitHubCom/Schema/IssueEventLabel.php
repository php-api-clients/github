<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventLabel
{
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SPL_HASH = '0000000054d5e1e60000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    private string $name;
    private string $color;
    public function name() : string
    {
        return $this->name;
    }
    public function color() : string
    {
        return $this->color;
    }
}
