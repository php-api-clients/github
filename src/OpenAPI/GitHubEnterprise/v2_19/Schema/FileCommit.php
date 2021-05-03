<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '000000005bc9882c000000002dbcf303';
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
