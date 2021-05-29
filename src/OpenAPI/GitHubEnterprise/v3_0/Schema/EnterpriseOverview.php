<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_TITLE       = 'enterprise-overview';
    public const SCHEMA_DESCRIPTION = '';
    private array $repos            = [];
    private array $hooks            = [];
    private array $pages            = [];
    private array $orgs             = [];
    private array $users            = [];
    private array $pulls            = [];
    private array $issues           = [];
    private array $milestones       = [];
    private array $gists            = [];
    private array $comments         = [];

    public function repos(): array
    {
        return $this->repos;
    }

    public function hooks(): array
    {
        return $this->hooks;
    }

    public function pages(): array
    {
        return $this->pages;
    }

    public function orgs(): array
    {
        return $this->orgs;
    }

    public function users(): array
    {
        return $this->users;
    }

    public function pulls(): array
    {
        return $this->pulls;
    }

    public function issues(): array
    {
        return $this->issues;
    }

    public function milestones(): array
    {
        return $this->milestones;
    }

    public function gists(): array
    {
        return $this->gists;
    }

    public function comments(): array
    {
        return $this->comments;
    }
}
