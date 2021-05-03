<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class GitUser
{
    public const SCHEMA_TITLE = 'Git User';
    public const SPL_HASH = '000000001f1e25d1000000004be6709d';
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
