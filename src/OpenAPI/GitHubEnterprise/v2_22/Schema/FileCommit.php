<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '00000000269f200800000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'File Commit';
    private ?object $content = null;
    private ?object $commit = null;
    public function content() : ?object
    {
        return $this->content;
    }
    public function commit() : ?object
    {
        return $this->commit;
    }
}
