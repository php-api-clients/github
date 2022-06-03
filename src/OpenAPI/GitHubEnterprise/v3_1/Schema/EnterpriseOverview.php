<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_TITLE = 'enterprise-overview';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseRepositoryOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseRepositoryOverview $repos;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseHookOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseHookOverview $hooks;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePageOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePageOverview $pages;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOrganizationOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOrganizationOverview $orgs;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseUserOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseUserOverview $users;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePullRequestOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePullRequestOverview $pulls;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseIssueOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseIssueOverview $issues;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseMilestoneOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseMilestoneOverview $milestones;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseGistOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseGistOverview $gists;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseCommentOverview::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseCommentOverview $comments;
    public function repos() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseRepositoryOverview
    {
        return $this->repos;
    }
    public function hooks() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseHookOverview
    {
        return $this->hooks;
    }
    public function pages() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePageOverview
    {
        return $this->pages;
    }
    public function orgs() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseOrganizationOverview
    {
        return $this->orgs;
    }
    public function users() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseUserOverview
    {
        return $this->users;
    }
    public function pulls() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterprisePullRequestOverview
    {
        return $this->pulls;
    }
    public function issues() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseIssueOverview
    {
        return $this->issues;
    }
    public function milestones() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseMilestoneOverview
    {
        return $this->milestones;
    }
    public function gists() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseGistOverview
    {
        return $this->gists;
    }
    public function comments() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\EnterpriseCommentOverview
    {
        return $this->comments;
    }
}
