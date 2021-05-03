<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '000000001c23f0f3000000003890ca58';
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
