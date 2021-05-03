<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_TITLE = 'enterprise-overview';
    public const SPL_HASH = '0000000065d65e0f000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = '';
    private object $repos;
    private object $hooks;
    private object $pages;
    private object $orgs;
    private object $users;
    private object $pulls;
    private object $issues;
    private object $milestones;
    private object $gists;
    private object $comments;
    public function repos() : object
    {
        return $this->repos;
    }
    public function hooks() : object
    {
        return $this->hooks;
    }
    public function pages() : object
    {
        return $this->pages;
    }
    public function orgs() : object
    {
        return $this->orgs;
    }
    public function users() : object
    {
        return $this->users;
    }
    public function pulls() : object
    {
        return $this->pulls;
    }
    public function issues() : object
    {
        return $this->issues;
    }
    public function milestones() : object
    {
        return $this->milestones;
    }
    public function gists() : object
    {
        return $this->gists;
    }
    public function comments() : object
    {
        return $this->comments;
    }
}
