<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SPL_HASH = '00000000252f46ab0000000029de5079';
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
