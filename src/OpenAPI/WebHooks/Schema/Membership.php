<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Membership
{
    public const SCHEMA_TITLE         = 'Membership';
    public const SCHEMA_DESCRIPTION   = 'The membership between the user and the organization. Not present when the action is `member_invited`.';
    private ?string $url              = null;
    private ?string $state            = null;
    private ?string $role             = null;
    private ?string $organization_url = null;
    private array $user               = [];

    public function url(): ?string
    {
        return $this->url;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function role(): ?string
    {
        return $this->role;
    }

    public function organization_url(): ?string
    {
        return $this->organization_url;
    }

    public function user(): array
    {
        return $this->user;
    }
}
