<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GitUser
{
    public const SCHEMA_TITLE = 'Git User';
    public const SPL_HASH = '000000007ee6e9570000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    private string $name;
    private string $email;
    private string $date;
    public function name() : string
    {
        return $this->name;
    }
    public function email() : string
    {
        return $this->email;
    }
    public function date() : string
    {
        return $this->date;
    }
}
