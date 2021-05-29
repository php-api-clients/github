<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE       = 'Stargazer';
    public const SCHEMA_DESCRIPTION = 'Stargazer';
    private ?string $starred_at     = null;
    private $user;

    public function starred_at(): ?string
    {
        return $this->starred_at;
    }

    public function user()
    {
        return $this->user;
    }
}
