<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '000000007ee6e6830000000021479ea3';
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
