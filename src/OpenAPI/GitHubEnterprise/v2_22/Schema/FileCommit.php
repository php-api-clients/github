<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '000000004a4ba91c0000000021d13a21';
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
