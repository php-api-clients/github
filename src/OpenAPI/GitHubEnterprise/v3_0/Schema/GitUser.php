<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class GitUser
{
    public const SCHEMA_TITLE = 'Git User';
    public const SPL_HASH = '000000005f182e8200000000682da57f';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    private ?string $name = null;
    private ?string $email = null;
    private ?string $date = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function date() : ?string
    {
        return $this->date;
    }
}
