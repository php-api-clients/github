<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SCHEMA_DESCRIPTION = 'File Commit';
    private object $content;
    private object $commit;
    public function content() : object
    {
        return $this->content;
    }
    public function commit() : object
    {
        return $this->commit;
    }
}
