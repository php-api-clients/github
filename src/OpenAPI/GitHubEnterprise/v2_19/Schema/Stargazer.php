<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '0000000018314701000000004028667d';
    public const SCHEMA_DESCRIPTION = 'Stargazer';
    private ?string $starred_at = null;
    private $user;
    public function starred_at() : ?string
    {
        return $this->starred_at;
    }
    public function user()
    {
        return $this->user;
    }
}
