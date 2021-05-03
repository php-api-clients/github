<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '0000000045a090320000000057b08344';
    public const SCHEMA_DESCRIPTION = 'Issue Event Rename';
    private ?string $from = null;
    private ?string $to = null;
    public function from() : ?string
    {
        return $this->from;
    }
    public function to() : ?string
    {
        return $this->to;
    }
}
