<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '000000002eab618300000000697c5254';
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
