<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventRename
{
    public const SCHEMA_TITLE       = 'Issue Event Rename';
    public const SCHEMA_DESCRIPTION = 'Issue Event Rename';
    private ?string $from           = null;
    private ?string $to             = null;

    public function from(): ?string
    {
        return $this->from;
    }

    public function to(): ?string
    {
        return $this->to;
    }
}
