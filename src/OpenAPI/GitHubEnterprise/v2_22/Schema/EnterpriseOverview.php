<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_TITLE = 'enterprise-overview';
    public const SCHEMA_DESCRIPTION = '';
    private array $repos = array();
    private array $hooks = array();
    private array $pages = array();
    private array $orgs = array();
    private array $users = array();
    private array $pulls = array();
    private array $issues = array();
    private array $milestones = array();
    private array $gists = array();
    private array $comments = array();
    public function repos() : array
    {
        return $this->repos;
    }
    public function hooks() : array
    {
        return $this->hooks;
    }
    public function pages() : array
    {
        return $this->pages;
    }
    public function orgs() : array
    {
        return $this->orgs;
    }
    public function users() : array
    {
        return $this->users;
    }
    public function pulls() : array
    {
        return $this->pulls;
    }
    public function issues() : array
    {
        return $this->issues;
    }
    public function milestones() : array
    {
        return $this->milestones;
    }
    public function gists() : array
    {
        return $this->gists;
    }
    public function comments() : array
    {
        return $this->comments;
    }
}
