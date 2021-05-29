<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class OrgBlock_Unblocked
{
    public const SCHEMA_TITLE       = 'org_block unblocked event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    private array $blocked_user     = [];
    private array $sender           = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function blocked_user(): array
    {
        return $this->blocked_user;
    }

    public function sender(): array
    {
        return $this->sender;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function organization(): array
    {
        return $this->organization;
    }
}
