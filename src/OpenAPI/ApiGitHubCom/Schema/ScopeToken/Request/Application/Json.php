<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ScopeToken\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["access_token"],"type":"object","properties":{"access_token":{"type":"string","description":"The OAuth access token used to authenticate to the GitHub API.","examples":["e72e16c7e42f292c6912e7710c838347ae178b4a"]},"target":{"type":"string","description":"The name of the user or organization to scope the user-to-server access token to. **Required** unless `target_id` is specified.","examples":["octocat"]},"target_id":{"type":"integer","description":"The ID of the user or organization to scope the user-to-server access token to. **Required** unless `target` is specified.","examples":[1]},"repositories":{"type":"array","items":{"type":"string","examples":["rails"]},"description":"The list of repository names to scope the user-to-server access token to. `repositories` may not be specified if `repository_ids` is specified."},"repository_ids":{"type":"array","items":{"type":"integer"},"description":"The list of repository IDs to scope the user-to-server access token to. `repository_ids` may not be specified if `repositories` is specified.","examples":[1]},"permissions":{"title":"App Permissions","type":"object","properties":{"actions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."},"administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."},"checks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for checks on code."},"contents":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."},"deployments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for deployments and deployment statuses."},"environments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for managing repository environments."},"issues":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."},"metadata":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."},"packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for packages published to GitHub Packages."},"pages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."},"pull_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."},"repository_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for a repository."},"repository_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for a repository."},"repository_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage repository projects, columns, and cards."},"secret_scanning_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage secret scanning alerts."},"secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage repository secrets."},"security_events":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage security events like code scanning alerts."},"single_file":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage just a single file."},"statuses":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for commit statuses."},"vulnerability_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage Dependabot alerts."},"workflows":{"enum":["write"],"type":"string","description":"The level of permission to grant the access token to update GitHub Actions workflow files."},"members":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization teams and members."},"organization_administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage access to an organization."},"organization_custom_roles":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for custom repository roles management. This property is in beta and is subject to change."},"organization_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for an organization."},"organization_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for an organization."},"organization_plan":{"enum":["read"],"type":"string","description":"The level of permission to grant the access token for viewing an organization\'s plan."},"organization_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage organization projects and projects beta (where available)."},"organization_packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization packages published to GitHub Packages."},"organization_secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage organization secrets."},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."},"organization_user_blocking":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage users blocked by the organization."},"team_discussions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage team discussions and related comments."}},"description":"The permissions granted to the user-to-server access token.","example":{"contents":"read","issues":"read","deployments":"write","single_file":"read"}}}}';
    public const SCHEMA_TITLE = 'ScopeToken\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The OAuth access token used to authenticate to the GitHub API.
     */
    public readonly string $access_token;
    /**
     * The name of the user or organization to scope the user-to-server access token to. **Required** unless `target_id` is specified.
     */
    public readonly ?string $target;
    /**
     * The ID of the user or organization to scope the user-to-server access token to. **Required** unless `target` is specified.
     */
    public readonly ?int $target_id;
    /**
     * The list of repository names to scope the user-to-server access token to. `repositories` may not be specified if `repository_ids` is specified.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Repositories>
     */
    public readonly array $repositories;
    /**
     * The list of repository IDs to scope the user-to-server access token to. `repository_ids` may not be specified if `repositories` is specified.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat>
     */
    public readonly array $repository_ids;
    /**
     * The permissions granted to the user-to-server access token.
     */
    public readonly array $permissions;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Repositories> $repositories
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeFrequencyStat> $repository_ids
     */
    public function __construct(string $access_token, string $target, int $target_id, array $repositories, array $repository_ids, array $permissions)
    {
        $this->access_token = $access_token;
        $this->target = $target;
        $this->target_id = $target_id;
        $this->repositories = $repositories;
        $this->repository_ids = $repository_ids;
        $this->permissions = $permissions;
    }
}
