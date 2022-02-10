<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyOrganization")
 */
abstract class Organization extends AbstractResource implements OrganizationInterface
{
    protected int $id;

    protected string $login;

    protected string $url;

    protected string $repos_url;

    protected string $events_url;

    protected string $hooks_url;

    protected string $issues_url;

    protected string $members_url;

    protected string $public_members_url;

    protected string $avatar_url;

    protected string $description;

    public function id(): int
    {
        return $this->id;
    }

    public function login(): string
    {
        return $this->login;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function reposUrl(): string
    {
        return $this->repos_url;
    }

    public function eventsUrl(): string
    {
        return $this->events_url;
    }

    public function hooksUrl(): string
    {
        return $this->hooks_url;
    }

    public function issuesUrl(): string
    {
        return $this->issues_url;
    }

    public function membersUrl(): string
    {
        return $this->members_url;
    }

    public function publicMembersUrl(): string
    {
        return $this->public_members_url;
    }

    public function avatarUrl(): string
    {
        return $this->avatar_url;
    }

    public function description(): string
    {
        return (string) $this->description;
    }
}
