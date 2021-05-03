<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '0000000015935a09000000001856c88e';
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
