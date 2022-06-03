<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AppPermissions
{
    public const SCHEMA_TITLE = 'App Permissions';
    public const SCHEMA_DESCRIPTION = 'The permissions granted to the user-to-server access token.';
    /**
     * The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts.
     */
    private string $actions;
    /**
     * The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation.
     */
    private string $administration;
    /**
     * The level of permission to grant the access token for checks on code.
     */
    private string $checks;
    /**
     * The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges.
     */
    private string $contents;
    /**
     * The level of permission to grant the access token for deployments and deployment statuses.
     */
    private string $deployments;
    /**
     * The level of permission to grant the access token for managing repository environments.
     */
    private string $environments;
    /**
     * The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones.
     */
    private string $issues;
    /**
     * The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata.
     */
    private string $metadata;
    /**
     * The level of permission to grant the access token for packages published to GitHub Packages.
     */
    private string $packages;
    /**
     * The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds.
     */
    private string $pages;
    /**
     * The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges.
     */
    private string $pull_requests;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for a repository.
     */
    private string $repository_hooks;
    /**
     * The level of permission to grant the access token to manage repository projects, columns, and cards.
     */
    private string $repository_projects;
    /**
     * The level of permission to grant the access token to view and manage secret scanning alerts.
     */
    private string $secret_scanning_alerts;
    /**
     * The level of permission to grant the access token to manage repository secrets.
     */
    private string $secrets;
    /**
     * The level of permission to grant the access token to view and manage security events like code scanning alerts.
     */
    private string $security_events;
    /**
     * The level of permission to grant the access token to manage just a single file.
     */
    private string $single_file;
    /**
     * The level of permission to grant the access token for commit statuses.
     */
    private string $statuses;
    /**
     * The level of permission to grant the access token to manage Dependabot alerts.
     */
    private string $vulnerability_alerts;
    /**
     * The level of permission to grant the access token to update GitHub Actions workflow files.
     */
    private string $workflows;
    /**
     * The level of permission to grant the access token for organization teams and members.
     */
    private string $members;
    /**
     * The level of permission to grant the access token to manage access to an organization.
     */
    private string $organization_administration;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for an organization.
     */
    private string $organization_hooks;
    /**
     * The level of permission to grant the access token for viewing an organization's plan.
     */
    private string $organization_plan;
    /**
     * The level of permission to grant the access token to manage organization projects and projects beta (where available).
     */
    private string $organization_projects;
    /**
     * The level of permission to grant the access token for organization packages published to GitHub Packages.
     */
    private string $organization_packages;
    /**
     * The level of permission to grant the access token to manage organization secrets.
     */
    private string $organization_secrets;
    /**
     * The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization.
     */
    private string $organization_self_hosted_runners;
    /**
     * The level of permission to grant the access token to view and manage users blocked by the organization.
     */
    private string $organization_user_blocking;
    /**
     * The level of permission to grant the access token to manage team discussions and related comments.
     */
    private string $team_discussions;
    /**
     * The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts.
     */
    public function actions() : string
    {
        return $this->actions;
    }
    /**
     * The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation.
     */
    public function administration() : string
    {
        return $this->administration;
    }
    /**
     * The level of permission to grant the access token for checks on code.
     */
    public function checks() : string
    {
        return $this->checks;
    }
    /**
     * The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges.
     */
    public function contents() : string
    {
        return $this->contents;
    }
    /**
     * The level of permission to grant the access token for deployments and deployment statuses.
     */
    public function deployments() : string
    {
        return $this->deployments;
    }
    /**
     * The level of permission to grant the access token for managing repository environments.
     */
    public function environments() : string
    {
        return $this->environments;
    }
    /**
     * The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones.
     */
    public function issues() : string
    {
        return $this->issues;
    }
    /**
     * The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata.
     */
    public function metadata() : string
    {
        return $this->metadata;
    }
    /**
     * The level of permission to grant the access token for packages published to GitHub Packages.
     */
    public function packages() : string
    {
        return $this->packages;
    }
    /**
     * The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds.
     */
    public function pages() : string
    {
        return $this->pages;
    }
    /**
     * The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges.
     */
    public function pull_requests() : string
    {
        return $this->pull_requests;
    }
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for a repository.
     */
    public function repository_hooks() : string
    {
        return $this->repository_hooks;
    }
    /**
     * The level of permission to grant the access token to manage repository projects, columns, and cards.
     */
    public function repository_projects() : string
    {
        return $this->repository_projects;
    }
    /**
     * The level of permission to grant the access token to view and manage secret scanning alerts.
     */
    public function secret_scanning_alerts() : string
    {
        return $this->secret_scanning_alerts;
    }
    /**
     * The level of permission to grant the access token to manage repository secrets.
     */
    public function secrets() : string
    {
        return $this->secrets;
    }
    /**
     * The level of permission to grant the access token to view and manage security events like code scanning alerts.
     */
    public function security_events() : string
    {
        return $this->security_events;
    }
    /**
     * The level of permission to grant the access token to manage just a single file.
     */
    public function single_file() : string
    {
        return $this->single_file;
    }
    /**
     * The level of permission to grant the access token for commit statuses.
     */
    public function statuses() : string
    {
        return $this->statuses;
    }
    /**
     * The level of permission to grant the access token to manage Dependabot alerts.
     */
    public function vulnerability_alerts() : string
    {
        return $this->vulnerability_alerts;
    }
    /**
     * The level of permission to grant the access token to update GitHub Actions workflow files.
     */
    public function workflows() : string
    {
        return $this->workflows;
    }
    /**
     * The level of permission to grant the access token for organization teams and members.
     */
    public function members() : string
    {
        return $this->members;
    }
    /**
     * The level of permission to grant the access token to manage access to an organization.
     */
    public function organization_administration() : string
    {
        return $this->organization_administration;
    }
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for an organization.
     */
    public function organization_hooks() : string
    {
        return $this->organization_hooks;
    }
    /**
     * The level of permission to grant the access token for viewing an organization's plan.
     */
    public function organization_plan() : string
    {
        return $this->organization_plan;
    }
    /**
     * The level of permission to grant the access token to manage organization projects and projects beta (where available).
     */
    public function organization_projects() : string
    {
        return $this->organization_projects;
    }
    /**
     * The level of permission to grant the access token for organization packages published to GitHub Packages.
     */
    public function organization_packages() : string
    {
        return $this->organization_packages;
    }
    /**
     * The level of permission to grant the access token to manage organization secrets.
     */
    public function organization_secrets() : string
    {
        return $this->organization_secrets;
    }
    /**
     * The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization.
     */
    public function organization_self_hosted_runners() : string
    {
        return $this->organization_self_hosted_runners;
    }
    /**
     * The level of permission to grant the access token to view and manage users blocked by the organization.
     */
    public function organization_user_blocking() : string
    {
        return $this->organization_user_blocking;
    }
    /**
     * The level of permission to grant the access token to manage team discussions and related comments.
     */
    public function team_discussions() : string
    {
        return $this->team_discussions;
    }
}
