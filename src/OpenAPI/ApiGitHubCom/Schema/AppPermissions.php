<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class AppPermissions
{
    public const SCHEMA_JSON = '{"title":"App Permissions","type":"object","properties":{"actions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts."},"administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation."},"checks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for checks on code."},"contents":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges."},"deployments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for deployments and deployment statuses."},"environments":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for managing repository environments."},"issues":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones."},"metadata":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata."},"packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for packages published to GitHub Packages."},"pages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds."},"pull_requests":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges."},"repository_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for a repository."},"repository_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for a repository."},"repository_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage repository projects, columns, and cards."},"secret_scanning_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage secret scanning alerts."},"secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage repository secrets."},"security_events":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage security events like code scanning alerts."},"single_file":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage just a single file."},"statuses":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for commit statuses."},"vulnerability_alerts":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage Dependabot alerts."},"workflows":{"enum":["write"],"type":"string","description":"The level of permission to grant the access token to update GitHub Actions workflow files."},"members":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization teams and members."},"organization_administration":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage access to an organization."},"organization_custom_roles":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for custom repository roles management. This property is in beta and is subject to change."},"organization_announcement_banners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage announcement banners for an organization."},"organization_hooks":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage the post-receive hooks for an organization."},"organization_plan":{"enum":["read"],"type":"string","description":"The level of permission to grant the access token for viewing an organization\'s plan."},"organization_projects":{"enum":["read","write","admin"],"type":"string","description":"The level of permission to grant the access token to manage organization projects and projects beta (where available)."},"organization_packages":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token for organization packages published to GitHub Packages."},"organization_secrets":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage organization secrets."},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization."},"organization_user_blocking":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to view and manage users blocked by the organization."},"team_discussions":{"enum":["read","write"],"type":"string","description":"The level of permission to grant the access token to manage team discussions and related comments."}},"description":"The permissions granted to the user-to-server access token.","example":{"contents":"read","issues":"read","deployments":"write","single_file":"read"}}';
    public const SCHEMA_TITLE = 'App Permissions';
    public const SCHEMA_DESCRIPTION = 'The permissions granted to the user-to-server access token.';
    /**
     * The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts.
     */
    public ?string $actions;
    /**
     * The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation.
     */
    public ?string $administration;
    /**
     * The level of permission to grant the access token for checks on code.
     */
    public ?string $checks;
    /**
     * The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges.
     */
    public ?string $contents;
    /**
     * The level of permission to grant the access token for deployments and deployment statuses.
     */
    public ?string $deployments;
    /**
     * The level of permission to grant the access token for managing repository environments.
     */
    public ?string $environments;
    /**
     * The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones.
     */
    public ?string $issues;
    /**
     * The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata.
     */
    public ?string $metadata;
    /**
     * The level of permission to grant the access token for packages published to GitHub Packages.
     */
    public ?string $packages;
    /**
     * The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds.
     */
    public ?string $pages;
    /**
     * The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges.
     */
    public ?string $pull_requests;
    /**
     * The level of permission to grant the access token to view and manage announcement banners for a repository.
     */
    public ?string $repository_announcement_banners;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for a repository.
     */
    public ?string $repository_hooks;
    /**
     * The level of permission to grant the access token to manage repository projects, columns, and cards.
     */
    public ?string $repository_projects;
    /**
     * The level of permission to grant the access token to view and manage secret scanning alerts.
     */
    public ?string $secret_scanning_alerts;
    /**
     * The level of permission to grant the access token to manage repository secrets.
     */
    public ?string $secrets;
    /**
     * The level of permission to grant the access token to view and manage security events like code scanning alerts.
     */
    public ?string $security_events;
    /**
     * The level of permission to grant the access token to manage just a single file.
     */
    public ?string $single_file;
    /**
     * The level of permission to grant the access token for commit statuses.
     */
    public ?string $statuses;
    /**
     * The level of permission to grant the access token to manage Dependabot alerts.
     */
    public ?string $vulnerability_alerts;
    /**
     * The level of permission to grant the access token to update GitHub Actions workflow files.
     */
    public ?string $workflows;
    /**
     * The level of permission to grant the access token for organization teams and members.
     */
    public ?string $members;
    /**
     * The level of permission to grant the access token to manage access to an organization.
     */
    public ?string $organization_administration;
    /**
     * The level of permission to grant the access token for custom repository roles management. This property is in beta and is subject to change.
     */
    public ?string $organization_custom_roles;
    /**
     * The level of permission to grant the access token to view and manage announcement banners for an organization.
     */
    public ?string $organization_announcement_banners;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for an organization.
     */
    public ?string $organization_hooks;
    /**
     * The level of permission to grant the access token for viewing an organization's plan.
     */
    public ?string $organization_plan;
    /**
     * The level of permission to grant the access token to manage organization projects and projects beta (where available).
     */
    public ?string $organization_projects;
    /**
     * The level of permission to grant the access token for organization packages published to GitHub Packages.
     */
    public ?string $organization_packages;
    /**
     * The level of permission to grant the access token to manage organization secrets.
     */
    public ?string $organization_secrets;
    /**
     * The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization.
     */
    public ?string $organization_self_hosted_runners;
    /**
     * The level of permission to grant the access token to view and manage users blocked by the organization.
     */
    public ?string $organization_user_blocking;
    /**
     * The level of permission to grant the access token to manage team discussions and related comments.
     */
    public ?string $team_discussions;
    public function __construct(string $actions, string $administration, string $checks, string $contents, string $deployments, string $environments, string $issues, string $metadata, string $packages, string $pages, string $pull_requests, string $repository_announcement_banners, string $repository_hooks, string $repository_projects, string $secret_scanning_alerts, string $secrets, string $security_events, string $single_file, string $statuses, string $vulnerability_alerts, string $workflows, string $members, string $organization_administration, string $organization_custom_roles, string $organization_announcement_banners, string $organization_hooks, string $organization_plan, string $organization_projects, string $organization_packages, string $organization_secrets, string $organization_self_hosted_runners, string $organization_user_blocking, string $team_discussions)
    {
        $this->actions = $actions;
        $this->administration = $administration;
        $this->checks = $checks;
        $this->contents = $contents;
        $this->deployments = $deployments;
        $this->environments = $environments;
        $this->issues = $issues;
        $this->metadata = $metadata;
        $this->packages = $packages;
        $this->pages = $pages;
        $this->pull_requests = $pull_requests;
        $this->repository_announcement_banners = $repository_announcement_banners;
        $this->repository_hooks = $repository_hooks;
        $this->repository_projects = $repository_projects;
        $this->secret_scanning_alerts = $secret_scanning_alerts;
        $this->secrets = $secrets;
        $this->security_events = $security_events;
        $this->single_file = $single_file;
        $this->statuses = $statuses;
        $this->vulnerability_alerts = $vulnerability_alerts;
        $this->workflows = $workflows;
        $this->members = $members;
        $this->organization_administration = $organization_administration;
        $this->organization_custom_roles = $organization_custom_roles;
        $this->organization_announcement_banners = $organization_announcement_banners;
        $this->organization_hooks = $organization_hooks;
        $this->organization_plan = $organization_plan;
        $this->organization_projects = $organization_projects;
        $this->organization_packages = $organization_packages;
        $this->organization_secrets = $organization_secrets;
        $this->organization_self_hosted_runners = $organization_self_hosted_runners;
        $this->organization_user_blocking = $organization_user_blocking;
        $this->team_discussions = $team_discussions;
    }
}
