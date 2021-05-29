<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Membership
{
    public const SCHEMA_TITLE       = 'Membership';
    public const SCHEMA_DESCRIPTION = 'The membership between the user and the organization. Not present when the action is `member_invited`.';
    private string $url;
    private string $state;
    private string $role;
    private string $organization_url;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $user = [];

    public function url(): string
    {
        return $this->url;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function role(): string
    {
        return $this->role;
    }

    public function organization_url(): string
    {
        return $this->organization_url;
    }

    public function user(): User
    {
        return $this->user;
    }
}