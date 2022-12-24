<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseOverview
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"repos":{"title":"Repository Enterprise Stats","required":["total_repos","root_repos","fork_repos","org_repos","total_pushes","total_wikis"],"type":"object","properties":{"total_repos":{"type":"integer"},"root_repos":{"type":"integer"},"fork_repos":{"type":"integer"},"org_repos":{"type":"integer"},"total_pushes":{"type":"integer"},"total_wikis":{"type":"integer"}}},"hooks":{"title":"Hooks Enterprise Stats","required":["total_hooks","active_hooks","inactive_hooks"],"type":"object","properties":{"total_hooks":{"type":"integer"},"active_hooks":{"type":"integer"},"inactive_hooks":{"type":"integer"}}},"pages":{"title":"Enterprise Pages Stats","required":["total_pages"],"type":"object","properties":{"total_pages":{"type":"integer"}}},"orgs":{"title":"Enterprise Organization Stats","required":["total_orgs","disabled_orgs","total_teams","total_team_members"],"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}},"users":{"title":"Enterprise User Stats","required":["total_users","admin_users","suspended_users"],"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}},"pulls":{"title":"Enterprise Pull Request Stats","required":["total_pulls","merged_pulls","mergeable_pulls","unmergeable_pulls"],"type":"object","properties":{"total_pulls":{"type":"integer"},"merged_pulls":{"type":"integer"},"mergeable_pulls":{"type":"integer"},"unmergeable_pulls":{"type":"integer"}}},"issues":{"title":"Enterprise Issue Stats","required":["total_issues","open_issues","closed_issues"],"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}},"milestones":{"title":"Enterprise Milestone Stats","required":["total_milestones","open_milestones","closed_milestones"],"type":"object","properties":{"total_milestones":{"type":"integer"},"open_milestones":{"type":"integer"},"closed_milestones":{"type":"integer"}}},"gists":{"title":"Enterprise Gist Stats","required":["total_gists","private_gists","public_gists"],"type":"object","properties":{"total_gists":{"type":"integer"},"private_gists":{"type":"integer"},"public_gists":{"type":"integer"}}},"comments":{"title":"Enterprise Comment Stats","required":["total_commit_comments","total_gist_comments","total_issue_comments","total_pull_request_comments"],"type":"object","properties":{"total_commit_comments":{"type":"integer"},"total_gist_comments":{"type":"integer"},"total_issue_comments":{"type":"integer"},"total_pull_request_comments":{"type":"integer"}}}}}';
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
