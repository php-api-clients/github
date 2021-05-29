<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class AppPermissions
{
    public const SCHEMA_TITLE       = 'App Permissions';
    public const SCHEMA_DESCRIPTION = 'The permissions granted to the user-to-server access token.';
    /**
     * The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`.
     */
    private ?string $actions = null;
    /**
     * The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`.
     */
    private ?string $administration = null;
    /**
     * The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`.
     */
    private ?string $checks = null;
    /**
     * The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`.
     */
    private ?string $content_references = null;
    /**
     * The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`.
     */
    private ?string $contents = null;
    /**
     * The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`.
     */
    private ?string $deployments = null;
    /**
     * The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`.
     */
    private ?string $environments = null;
    /**
     * The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`.
     */
    private ?string $issues = null;
    /**
     * The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`.
     */
    private ?string $metadata = null;
    /**
     * The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`.
     */
    private ?string $packages = null;
    /**
     * The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`.
     */
    private ?string $pages = null;
    /**
     * The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`.
     */
    private ?string $pull_requests = null;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`.
     */
    private ?string $repository_hooks = null;
    /**
     * The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     */
    private ?string $repository_projects = null;
    /**
     * The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`.
     */
    private ?string $secret_scanning_alerts = null;
    /**
     * The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`.
     */
    private ?string $secrets = null;
    /**
     * The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`.
     */
    private ?string $security_events = null;
    /**
     * The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`.
     */
    private ?string $single_file = null;
    /**
     * The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`.
     */
    private ?string $statuses = null;
    /**
     * The level of permission to grant the access token to retrieve Dependabot alerts. Can be one of: `read`.
     */
    private ?string $vulnerability_alerts = null;
    /**
     * The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`.
     */
    private ?string $workflows = null;
    /**
     * The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`.
     */
    private ?string $members = null;
    /**
     * The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`.
     */
    private ?string $organization_administration = null;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`.
     */
    private ?string $organization_hooks = null;
    /**
     * The level of permission to grant the access token for viewing an organization's plan. Can be one of: `read`.
     */
    private ?string $organization_plan = null;
    /**
     * The level of permission to grant the access token to manage organization projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     */
    private ?string $organization_projects = null;
    /**
     * The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`.
     */
    private ?string $organization_secrets = null;
    /**
     * The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`.
     */
    private ?string $organization_self_hosted_runners = null;
    /**
     * The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`.
     */
    private ?string $organization_user_blocking = null;
    /**
     * The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`.
     */
    private ?string $team_discussions = null;

    /**
     * The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`.
     */
    public function actions(): ?string
    {
        return $this->actions;
    }

    /**
     * The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`.
     */
    public function administration(): ?string
    {
        return $this->administration;
    }

    /**
     * The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`.
     */
    public function checks(): ?string
    {
        return $this->checks;
    }

    /**
     * The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`.
     */
    public function content_references(): ?string
    {
        return $this->content_references;
    }

    /**
     * The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`.
     */
    public function contents(): ?string
    {
        return $this->contents;
    }

    /**
     * The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`.
     */
    public function deployments(): ?string
    {
        return $this->deployments;
    }

    /**
     * The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`.
     */
    public function environments(): ?string
    {
        return $this->environments;
    }

    /**
     * The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`.
     */
    public function issues(): ?string
    {
        return $this->issues;
    }

    /**
     * The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`.
     */
    public function metadata(): ?string
    {
        return $this->metadata;
    }

    /**
     * The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`.
     */
    public function packages(): ?string
    {
        return $this->packages;
    }

    /**
     * The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`.
     */
    public function pages(): ?string
    {
        return $this->pages;
    }

    /**
     * The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`.
     */
    public function pull_requests(): ?string
    {
        return $this->pull_requests;
    }

    /**
     * The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`.
     */
    public function repository_hooks(): ?string
    {
        return $this->repository_hooks;
    }

    /**
     * The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     */
    public function repository_projects(): ?string
    {
        return $this->repository_projects;
    }

    /**
     * The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`.
     */
    public function secret_scanning_alerts(): ?string
    {
        return $this->secret_scanning_alerts;
    }

    /**
     * The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`.
     */
    public function secrets(): ?string
    {
        return $this->secrets;
    }

    /**
     * The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`.
     */
    public function security_events(): ?string
    {
        return $this->security_events;
    }

    /**
     * The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`.
     */
    public function single_file(): ?string
    {
        return $this->single_file;
    }

    /**
     * The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`.
     */
    public function statuses(): ?string
    {
        return $this->statuses;
    }

    /**
     * The level of permission to grant the access token to retrieve Dependabot alerts. Can be one of: `read`.
     */
    public function vulnerability_alerts(): ?string
    {
        return $this->vulnerability_alerts;
    }

    /**
     * The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`.
     */
    public function workflows(): ?string
    {
        return $this->workflows;
    }

    /**
     * The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`.
     */
    public function members(): ?string
    {
        return $this->members;
    }

    /**
     * The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`.
     */
    public function organization_administration(): ?string
    {
        return $this->organization_administration;
    }

    /**
     * The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`.
     */
    public function organization_hooks(): ?string
    {
        return $this->organization_hooks;
    }

    /**
     * The level of permission to grant the access token for viewing an organization's plan. Can be one of: `read`.
     */
    public function organization_plan(): ?string
    {
        return $this->organization_plan;
    }

    /**
     * The level of permission to grant the access token to manage organization projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     */
    public function organization_projects(): ?string
    {
        return $this->organization_projects;
    }

    /**
     * The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`.
     */
    public function organization_secrets(): ?string
    {
        return $this->organization_secrets;
    }

    /**
     * The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`.
     */
    public function organization_self_hosted_runners(): ?string
    {
        return $this->organization_self_hosted_runners;
    }

    /**
     * The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`.
     */
    public function organization_user_blocking(): ?string
    {
        return $this->organization_user_blocking;
    }

    /**
     * The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`.
     */
    public function team_discussions(): ?string
    {
        return $this->team_discussions;
    }
}
