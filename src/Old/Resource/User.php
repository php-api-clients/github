<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @EmptyResource("EmptyUser")
 */
abstract class User extends AbstractResource implements UserInterface
{
    protected int $id;

    protected string $login;

    protected string $url;

    protected string $avatar_url;

    protected string $type;

    protected bool $site_admin;

    protected string $name;

    protected string $company;

    protected string $blog;

    protected string $location;

    protected string $email;

    protected bool $hireable;

    protected string $bio;

    protected string $public_repos;

    protected string $public_gists;

    protected string $followers;

    protected string $following;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

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

    public function avatarUrl(): string
    {
        return $this->avatar_url;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function siteAdmin(): bool
    {
        return $this->site_admin;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function company(): string
    {
        return $this->company;
    }

    public function blog(): string
    {
        return $this->blog;
    }

    public function location(): string
    {
        return $this->location;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function hireable(): bool
    {
        return $this->hireable;
    }

    public function bio(): string
    {
        return $this->bio;
    }

    public function publicRepos(): string
    {
        return $this->public_repos;
    }

    public function publicGists(): string
    {
        return $this->public_gists;
    }

    public function followers(): string
    {
        return $this->followers;
    }

    public function following(): string
    {
        return $this->following;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    public function repository(string $repository): void
    {
    }
}
