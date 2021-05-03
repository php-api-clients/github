<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '0000000065dd766a000000006352672d';
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
