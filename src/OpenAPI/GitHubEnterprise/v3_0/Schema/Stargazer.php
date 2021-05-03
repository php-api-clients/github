<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '000000001f1e3cb1000000004be6709d';
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
