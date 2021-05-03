<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitUser
{
    public const SCHEMA_TITLE = 'Git User';
    public const SPL_HASH = '0000000054d5e5b70000000071115dec';
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
