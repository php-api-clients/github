<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '0000000065d62636000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = 'Issue Event Rename';
    private string $from;
    private string $to;
    public function from() : string
    {
        return $this->from;
    }
    public function to() : string
    {
        return $this->to;
    }
}
