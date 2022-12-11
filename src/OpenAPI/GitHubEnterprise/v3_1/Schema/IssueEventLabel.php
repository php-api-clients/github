<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class IssueEventLabel
{
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    private $name;
    private $color;
    public function name()
    {
        return $this->name;
    }
    public function color()
    {
        return $this->color;
    }
}
