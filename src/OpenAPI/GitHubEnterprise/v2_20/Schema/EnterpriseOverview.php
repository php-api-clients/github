<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_TITLE = 'enterprise-overview';
    public const SPL_HASH = '000000002493509c00000000123fabb6';
    public const SCHEMA_DESCRIPTION = '';
    private ?object $repos = null;
    private ?object $hooks = null;
    private ?object $pages = null;
    private ?object $orgs = null;
    private ?object $users = null;
    private ?object $pulls = null;
    private ?object $issues = null;
    private ?object $milestones = null;
    private ?object $gists = null;
    private ?object $comments = null;
    public function repos() : ?object
    {
        return $this->repos;
    }
    public function hooks() : ?object
    {
        return $this->hooks;
    }
    public function pages() : ?object
    {
        return $this->pages;
    }
    public function orgs() : ?object
    {
        return $this->orgs;
    }
    public function users() : ?object
    {
        return $this->users;
    }
    public function pulls() : ?object
    {
        return $this->pulls;
    }
    public function issues() : ?object
    {
        return $this->issues;
    }
    public function milestones() : ?object
    {
        return $this->milestones;
    }
    public function gists() : ?object
    {
        return $this->gists;
    }
    public function comments() : ?object
    {
        return $this->comments;
    }
}
