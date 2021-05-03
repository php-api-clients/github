<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '000000002eab1dc600000000697c5254';
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
