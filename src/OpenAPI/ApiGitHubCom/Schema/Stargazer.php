<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Stargazer
{
    public const SCHEMA_TITLE = 'Stargazer';
    public const SCHEMA_DESCRIPTION = 'Stargazer';
    private string $starred_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $user = null;
    public function starred_at() : string
    {
        return $this->starred_at;
    }
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->user;
    }
}
