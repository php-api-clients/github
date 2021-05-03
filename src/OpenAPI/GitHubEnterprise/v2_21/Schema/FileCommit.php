<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '0000000065d626c3000000007ce49c9a';
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
