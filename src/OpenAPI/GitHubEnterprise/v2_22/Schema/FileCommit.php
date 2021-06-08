<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE       = 'File Commit';
    public const SCHEMA_DESCRIPTION = 'File Commit';
    private array $content          = [];
    private array $commit           = [];

    public function content(): array
    {
        return $this->content;
    }

    public function commit(): array
    {
        return $this->commit;
    }
}
