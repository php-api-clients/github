<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"}';
    public const SCHEMA_TITLE = 'PerformedViaGithubApp\\Permissions';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    public readonly string $actions;
    public readonly string $administration;
    public readonly string $checks;
    public readonly string $content_references;
    public readonly string $contents;
    public readonly string $deployments;
    public readonly string $discussions;
    public readonly string $emails;
    public readonly string $environments;
    public readonly string $issues;
    public readonly string $keys;
    public readonly string $members;
    public readonly string $metadata;
    public readonly string $organization_administration;
    public readonly string $organization_hooks;
    public readonly string $organization_packages;
    public readonly string $organization_plan;
    public readonly string $organization_projects;
    public readonly string $organization_secrets;
    public readonly string $organization_self_hosted_runners;
    public readonly string $organization_user_blocking;
    public readonly string $packages;
    public readonly string $pages;
    public readonly string $pull_requests;
    public readonly string $repository_hooks;
    public readonly string $repository_projects;
    public readonly string $secret_scanning_alerts;
    public readonly string $secrets;
    public readonly string $security_events;
    public readonly string $security_scanning_alert;
    public readonly string $single_file;
    public readonly string $statuses;
    public readonly string $team_discussions;
    public readonly string $vulnerability_alerts;
    public readonly string $workflows;
    public function __construct(string $actions, string $administration, string $checks, string $content_references, string $contents, string $deployments, string $discussions, string $emails, string $environments, string $issues, string $keys, string $members, string $metadata, string $organization_administration, string $organization_hooks, string $organization_packages, string $organization_plan, string $organization_projects, string $organization_secrets, string $organization_self_hosted_runners, string $organization_user_blocking, string $packages, string $pages, string $pull_requests, string $repository_hooks, string $repository_projects, string $secret_scanning_alerts, string $secrets, string $security_events, string $security_scanning_alert, string $single_file, string $statuses, string $team_discussions, string $vulnerability_alerts, string $workflows)
    {
        $this->actions = $actions;
        $this->administration = $administration;
        $this->checks = $checks;
        $this->content_references = $content_references;
        $this->contents = $contents;
        $this->deployments = $deployments;
        $this->discussions = $discussions;
        $this->emails = $emails;
        $this->environments = $environments;
        $this->issues = $issues;
        $this->keys = $keys;
        $this->members = $members;
        $this->metadata = $metadata;
        $this->organization_administration = $organization_administration;
        $this->organization_hooks = $organization_hooks;
        $this->organization_packages = $organization_packages;
        $this->organization_plan = $organization_plan;
        $this->organization_projects = $organization_projects;
        $this->organization_secrets = $organization_secrets;
        $this->organization_self_hosted_runners = $organization_self_hosted_runners;
        $this->organization_user_blocking = $organization_user_blocking;
        $this->packages = $packages;
        $this->pages = $pages;
        $this->pull_requests = $pull_requests;
        $this->repository_hooks = $repository_hooks;
        $this->repository_projects = $repository_projects;
        $this->secret_scanning_alerts = $secret_scanning_alerts;
        $this->secrets = $secrets;
        $this->security_events = $security_events;
        $this->security_scanning_alert = $security_scanning_alert;
        $this->single_file = $single_file;
        $this->statuses = $statuses;
        $this->team_discussions = $team_discussions;
        $this->vulnerability_alerts = $vulnerability_alerts;
        $this->workflows = $workflows;
    }
}
