<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Organization_MemberInvited
{
    public const SCHEMA_TITLE       = 'organization member_invited event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The invitation for the user or email if the action is `member_invited`.
     */
    private array $invitation = [];
    private array $sender     = [];
    /**
     * Installation
     */
    private array $installation = [];
    private array $organization = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function invitation(): array
    {
        return $this->invitation;
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
