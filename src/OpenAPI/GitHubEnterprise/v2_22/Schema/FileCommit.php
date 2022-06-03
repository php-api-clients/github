<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SCHEMA_DESCRIPTION = 'File Commit';
    private array $content = array();
    private array $commit = array();
    public function content() : array
    {
        return $this->content;
    }
    public function commit() : array
    {
        return $this->commit;
    }
}
