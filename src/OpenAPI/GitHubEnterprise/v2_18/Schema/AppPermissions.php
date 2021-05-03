<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class AppPermissions
{
    public const SCHEMA_TITLE = 'App Permissions';
    public const SPL_HASH = '000000006e7b7921000000005d0d00fd';
    public const SCHEMA_DESCRIPTION = 'The permissions granted to the user-to-server access token.';
    /**
     * The level of permission to grant the access token for GitHub Actions workflows, workflow runs, and artifacts. Can be one of: `read` or `write`.
     */
    private string $actions;
    /**
     * The level of permission to grant the access token for repository creation, deletion, settings, teams, and collaborators creation. Can be one of: `read` or `write`.
     */
    private string $administration;
    /**
     * The level of permission to grant the access token for checks on code. Can be one of: `read` or `write`.
     */
    private string $checks;
    /**
     * The level of permission to grant the access token for notification of content references and creation content attachments. Can be one of: `read` or `write`.
     */
    private string $content_references;
    /**
     * The level of permission to grant the access token for repository contents, commits, branches, downloads, releases, and merges. Can be one of: `read` or `write`.
     */
    private string $contents;
    /**
     * The level of permission to grant the access token for deployments and deployment statuses. Can be one of: `read` or `write`.
     */
    private string $deployments;
    /**
     * The level of permission to grant the access token for managing repository environments. Can be one of: `read` or `write`.
     */
    private string $environments;
    /**
     * The level of permission to grant the access token for issues and related comments, assignees, labels, and milestones. Can be one of: `read` or `write`.
     */
    private string $issues;
    /**
     * The level of permission to grant the access token to search repositories, list collaborators, and access repository metadata. Can be one of: `read` or `write`.
     */
    private string $metadata;
    /**
     * The level of permission to grant the access token for packages published to GitHub Packages. Can be one of: `read` or `write`.
     */
    private string $packages;
    /**
     * The level of permission to grant the access token to retrieve Pages statuses, configuration, and builds, as well as create new builds. Can be one of: `read` or `write`.
     */
    private string $pages;
    /**
     * The level of permission to grant the access token for pull requests and related comments, assignees, labels, milestones, and merges. Can be one of: `read` or `write`.
     */
    private string $pull_requests;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for a repository. Can be one of: `read` or `write`.
     */
    private string $repository_hooks;
    /**
     * The level of permission to grant the access token to manage repository projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     */
    private string $repository_projects;
    /**
     * The level of permission to grant the access token to view and manage secret scanning alerts. Can be one of: `read` or `write`.
     */
    private string $secret_scanning_alerts;
    /**
     * The level of permission to grant the access token to manage repository secrets. Can be one of: `read` or `write`.
     */
    private string $secrets;
    /**
     * The level of permission to grant the access token to view and manage security events like code scanning alerts. Can be one of: `read` or `write`.
     */
    private string $security_events;
    /**
     * The level of permission to grant the access token to manage just a single file. Can be one of: `read` or `write`.
     */
    private string $single_file;
    /**
     * The level of permission to grant the access token for commit statuses. Can be one of: `read` or `write`.
     */
    private string $statuses;
    /**
     * The level of permission to grant the access token to retrieve Dependabot alerts. Can be one of: `read`.
     */
    private string $vulnerability_alerts;
    /**
     * The level of permission to grant the access token to update GitHub Actions workflow files. Can be one of: `write`.
     */
    private string $workflows;
    /**
     * The level of permission to grant the access token for organization teams and members. Can be one of: `read` or `write`.
     */
    private string $members;
    /**
     * The level of permission to grant the access token to manage access to an organization. Can be one of: `read` or `write`.
     */
    private string $organization_administration;
    /**
     * The level of permission to grant the access token to manage the post-receive hooks for an organization. Can be one of: `read` or `write`.
     */
    private string $organization_hooks;
    /**
     * The level of permission to grant the access token for viewing an organization's plan. Can be one of: `read`.
     */
    private string $organization_plan;
    /**
     * The level of permission to grant the access token to manage organization projects, columns, and cards. Can be one of: `read`, `write`, or `admin`.
     */
    private string $organization_projects;
    /**
     * The level of permission to grant the access token to manage organization secrets. Can be one of: `read` or `write`.
     */
    private string $organization_secrets;
    /**
     * The level of permission to grant the access token to view and manage GitHub Actions self-hosted runners available to an organization. Can be one of: `read` or `write`.
     */
    private string $organization_self_hosted_runners;
    /**
     * The level of permission to grant the access token to view and manage users blocked by the organization. Can be one of: `read` or `write`.
     */
    private string $organization_user_blocking;
    /**
     * The level of permission to grant the access token to manage team discussions and related comments. Can be one of: `read` or `write`.
     */
    private string $team_discussions;
    public function actions() : string
    {
        return $this->actions;
    }
    public function administration() : string
    {
        return $this->administration;
    }
    public function checks() : string
    {
        return $this->checks;
    }
    public function content_references() : string
    {
        return $this->content_references;
    }
    public function contents() : string
    {
        return $this->contents;
    }
    public function deployments() : string
    {
        return $this->deployments;
    }
    public function environments() : string
    {
        return $this->environments;
    }
    public function issues() : string
    {
        return $this->issues;
    }
    public function metadata() : string
    {
        return $this->metadata;
    }
    public function packages() : string
    {
        return $this->packages;
    }
    public function pages() : string
    {
        return $this->pages;
    }
    public function pull_requests() : string
    {
        return $this->pull_requests;
    }
    public function repository_hooks() : string
    {
        return $this->repository_hooks;
    }
    public function repository_projects() : string
    {
        return $this->repository_projects;
    }
    public function secret_scanning_alerts() : string
    {
        return $this->secret_scanning_alerts;
    }
    public function secrets() : string
    {
        return $this->secrets;
    }
    public function security_events() : string
    {
        return $this->security_events;
    }
    public function single_file() : string
    {
        return $this->single_file;
    }
    public function statuses() : string
    {
        return $this->statuses;
    }
    public function vulnerability_alerts() : string
    {
        return $this->vulnerability_alerts;
    }
    public function workflows() : string
    {
        return $this->workflows;
    }
    public function members() : string
    {
        return $this->members;
    }
    public function organization_administration() : string
    {
        return $this->organization_administration;
    }
    public function organization_hooks() : string
    {
        return $this->organization_hooks;
    }
    public function organization_plan() : string
    {
        return $this->organization_plan;
    }
    public function organization_projects() : string
    {
        return $this->organization_projects;
    }
    public function organization_secrets() : string
    {
        return $this->organization_secrets;
    }
    public function organization_self_hosted_runners() : string
    {
        return $this->organization_self_hosted_runners;
    }
    public function organization_user_blocking() : string
    {
        return $this->organization_user_blocking;
    }
    public function team_discussions() : string
    {
        return $this->team_discussions;
    }
}
