<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '000000001c23f3e0000000003890ca58';
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
