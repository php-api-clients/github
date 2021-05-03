<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class FileCommit
{
    public const SCHEMA_TITLE = 'File Commit';
    public const SPL_HASH = '00000000252f47fc0000000029de5079';
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
