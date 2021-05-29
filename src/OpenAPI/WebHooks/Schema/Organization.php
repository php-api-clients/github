<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Organization
{
    public const SCHEMA_TITLE       = 'Organization';
    public const SCHEMA_DESCRIPTION = '';
    private string $login;
    private int $id;
    private string $node_id;
    private string $url;
    private string $html_url;
    private string $repos_url;
    private string $events_url;
    private string $hooks_url;
    private string $issues_url;
    private string $members_url;
    private string $public_members_url;
    private string $avatar_url;
    private $description;

    public function login(): string
    {
        return $this->login;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function repos_url(): string
    {
        return $this->repos_url;
    }

    public function events_url(): string
    {
        return $this->events_url;
    }

    public function hooks_url(): string
    {
        return $this->hooks_url;
    }

    public function issues_url(): string
    {
        return $this->issues_url;
    }

    public function members_url(): string
    {
        return $this->members_url;
    }

    public function public_members_url(): string
    {
        return $this->public_members_url;
    }

    public function avatar_url(): string
    {
        return $this->avatar_url;
    }

    public function description()
    {
        return $this->description;
    }
}