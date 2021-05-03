<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class GitUser
{
    public const SCHEMA_TITLE = 'Git User';
    public const SPL_HASH = '000000002eab672b00000000697c5254';
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
