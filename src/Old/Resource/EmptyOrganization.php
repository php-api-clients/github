<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyOrganization implements OrganizationInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function login(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function reposUrl(): string
    {
        return null;
    }

    public function eventsUrl(): string
    {
        return null;
    }

    public function hooksUrl(): string
    {
        return null;
    }

    public function issuesUrl(): string
    {
        return null;
    }

    public function membersUrl(): string
    {
        return null;
    }

    public function publicMembersUrl(): string
    {
        return null;
    }

    public function avatarUrl(): string
    {
        return null;
    }

    public function description(): string
    {
        return null;
    }
}
