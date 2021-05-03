<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SPL_HASH = '00000000252f4baa0000000029de5079';
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
