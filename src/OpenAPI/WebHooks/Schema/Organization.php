<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Organization
{
    public const SCHEMA_TITLE = 'Organization';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $login = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $repos_url = null;
    private ?string $events_url = null;
    private ?string $hooks_url = null;
    private ?string $issues_url = null;
    private ?string $members_url = null;
    private ?string $public_members_url = null;
    private ?string $avatar_url = null;
    private $description;
    public function login() : ?string
    {
        return $this->login;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function repos_url() : ?string
    {
        return $this->repos_url;
    }
    public function events_url() : ?string
    {
        return $this->events_url;
    }
    public function hooks_url() : ?string
    {
        return $this->hooks_url;
    }
    public function issues_url() : ?string
    {
        return $this->issues_url;
    }
    public function members_url() : ?string
    {
        return $this->members_url;
    }
    public function public_members_url() : ?string
    {
        return $this->public_members_url;
    }
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
    public function description()
    {
        return $this->description;
    }
}
