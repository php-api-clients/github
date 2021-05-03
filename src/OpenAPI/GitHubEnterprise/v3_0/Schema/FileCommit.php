<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '0000000008b920cf00000000412ebbda';
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
