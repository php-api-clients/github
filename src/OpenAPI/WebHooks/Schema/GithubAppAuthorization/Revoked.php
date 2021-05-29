<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\GithubAppAuthorization;

use ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User;

final class Revoked
{
    public const SCHEMA_TITLE       = 'github_app_authorization revoked event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $sender;

    public function action(): string
    {
        return $this->action;
    }

    public function sender(): User
    {
        return $this->sender;
    }
}
