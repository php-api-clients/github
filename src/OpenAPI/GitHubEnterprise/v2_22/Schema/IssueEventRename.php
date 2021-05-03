<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '00000000269f210700000000005e85e5';
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
