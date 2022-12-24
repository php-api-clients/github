<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C9F4Cdd016B4453F87E88381C149788Bf
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"repositories":{"type":"array","items":{"type":"string","examples":["rails"]},"description":"List of repository names that the token should have access to"},"repository_ids":{"type":"array","items":{"type":"integer"},"description":"List of repository IDs that the token should have access to","examples":[1]},"permissions":{"title":"App Permissions","type":"object","properties":{"actions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."},"administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."},"checks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for checks on code."},"contents":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."},"deployments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for deployments and deployment statuses."},"environments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for managing repository environments."},"issues":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."},"metadata":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."},"packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for packages published to GitHub Packages."},"pages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."},"pull_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."},"repository_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for a repository."},"repository_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage repository projects, columns, and cards."},"secret_scanning_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage secret scanning alerts."},"secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage repository secrets."},"security_events":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage security events like code scanning alerts."},"single_file":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage just a single file."},"statuses":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for commit statuses."},"vulnerability_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage Dependabot alerts."},"workflows":{"enum":["write"],"type":"string","description":"The level of permission to grant the access token to update GitHub Actions workflow files."},"members":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization teams and members."},"organization_administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage access to an organization."},"organization_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for an organization."},"organization_plan":{"enum":["read"],"type":"string","description":"The level of permission to grant the access token for viewing an organization\'s plan."},"organization_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage organization projects and projects beta (where available)."},"organization_packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization packages published to GitHub Packages."},"organization_secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage organization secrets."},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."},"organization_user_blocking":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage users blocked by the organization."},"team_discussions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage team discussions and related comments."},"content_references":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for notification of content references and creation content attachments."}},"description":"The permissions granted to the user-to-server access token.","example":{"contents":"read","issues":"read","deployments":"write","single_file":"read"}}}}';
    public const SCHEMA_TITLE = 'c_9f4cdd016b4453f87e88381c149788bf';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * List of repository names that the token should have access to
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3821C5Cb1069D0D7C54Eaa003187006>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3821C5Cb1069D0D7C54Eaa003187006::class)
     */
    private array $repositories = array();
    /**
     * List of repository IDs that the token should have access to
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03::class)
     */
    private array $repository_ids = array();
    /**
     * The permissions granted to the user-to-server access token.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AppPermissions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AppPermissions $permissions;
    /**
     * List of repository names that the token should have access to
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\CD3821C5Cb1069D0D7C54Eaa003187006>
     */
    public function repositories() : array
    {
        return $this->repositories;
    }
    /**
     * List of repository IDs that the token should have access to
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown\C987434F426A7002Fc01406E2Ac533C03>
     */
    public function repository_ids() : array
    {
        return $this->repository_ids;
    }
    /**
     * The permissions granted to the user-to-server access token.
     */
    public function permissions() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\AppPermissions
    {
        return $this->permissions;
    }
}
