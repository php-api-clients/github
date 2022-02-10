<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class NullableGitUser
{
    public const SCHEMA_TITLE = 'Git User';
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
