<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class IssueEventLabel
{
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SPL_HASH = '000000001c23f0c2000000003890ca58';
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
