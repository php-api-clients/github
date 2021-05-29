<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class GithubAppAuthorization_Revoked
{
    public const SCHEMA_TITLE       = 'github_app_authorization revoked event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $sender           = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function sender(): array
    {
        return $this->sender;
    }
}
