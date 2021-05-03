<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '00000000159325d9000000001856c88e';
    public const SCHEMA_DESCRIPTION = 'Stargazer';
    private string $starred_at;
    private $user;
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    public function user()
    {
        return $this->user;
    }
}
