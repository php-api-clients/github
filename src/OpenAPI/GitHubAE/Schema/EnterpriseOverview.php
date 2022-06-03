<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_TITLE = 'enterprise-overview';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseRepositoryOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseRepositoryOverview $repos;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseHookOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseHookOverview $hooks;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePageOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePageOverview $pages;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOrganizationOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOrganizationOverview $orgs;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseUserOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseUserOverview $users;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePullRequestOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePullRequestOverview $pulls;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseIssueOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseIssueOverview $issues;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseMilestoneOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseMilestoneOverview $milestones;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseGistOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseGistOverview $gists;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseCommentOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseCommentOverview $comments;
    public function repos() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseRepositoryOverview
    {
        return $this->repos;
    }
    public function hooks() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseHookOverview
    {
        return $this->hooks;
    }
    public function pages() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePageOverview
    {
        return $this->pages;
    }
    public function orgs() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseOrganizationOverview
    {
        return $this->orgs;
    }
    public function users() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseUserOverview
    {
        return $this->users;
    }
    public function pulls() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterprisePullRequestOverview
    {
        return $this->pulls;
    }
    public function issues() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseIssueOverview
    {
        return $this->issues;
    }
    public function milestones() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseMilestoneOverview
    {
        return $this->milestones;
    }
    public function gists() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseGistOverview
    {
        return $this->gists;
    }
    public function comments() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\EnterpriseCommentOverview
    {
        return $this->comments;
    }
}
