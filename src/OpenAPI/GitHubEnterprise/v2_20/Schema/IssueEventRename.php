<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '000000005d4c9be7000000005494ca51';
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
