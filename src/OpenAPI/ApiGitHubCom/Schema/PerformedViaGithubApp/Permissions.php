<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"}';
    public const SCHEMA_TITLE = 'PerformedViaGithubApp\\Permissions';
    public const SCHEMA_DESCRIPTION = 'The set of permissions for the GitHub app';
    private string $actions;
    private string $administration;
    private string $checks;
    private string $content_references;
    private string $contents;
    private string $deployments;
    private string $discussions;
    private string $emails;
    private string $environments;
    private string $issues;
    private string $keys;
    private string $members;
    private string $metadata;
    private string $organization_administration;
    private string $organization_hooks;
    private string $organization_packages;
    private string $organization_plan;
    private string $organization_projects;
    private string $organization_secrets;
    private string $organization_self_hosted_runners;
    private string $organization_user_blocking;
    private string $packages;
    private string $pages;
    private string $pull_requests;
    private string $repository_hooks;
    private string $repository_projects;
    private string $secret_scanning_alerts;
    private string $secrets;
    private string $security_events;
    private string $security_scanning_alert;
    private string $single_file;
    private string $statuses;
    private string $team_discussions;
    private string $vulnerability_alerts;
    private string $workflows;
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
    public function discussions() : string
    {
        return $this->discussions;
    }
    public function emails() : string
    {
        return $this->emails;
    }
    public function environments() : string
    {
        return $this->environments;
    }
    public function issues() : string
    {
        return $this->issues;
    }
    public function keys() : string
    {
        return $this->keys;
    }
    public function members() : string
    {
        return $this->members;
    }
    public function metadata() : string
    {
        return $this->metadata;
    }
    public function organization_administration() : string
    {
        return $this->organization_administration;
    }
    public function organization_hooks() : string
    {
        return $this->organization_hooks;
    }
    public function organization_packages() : string
    {
        return $this->organization_packages;
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
    public function security_scanning_alert() : string
    {
        return $this->security_scanning_alert;
    }
    public function single_file() : string
    {
        return $this->single_file;
    }
    public function statuses() : string
    {
        return $this->statuses;
    }
    public function team_discussions() : string
    {
        return $this->team_discussions;
    }
    public function vulnerability_alerts() : string
    {
        return $this->vulnerability_alerts;
    }
    public function workflows() : string
    {
        return $this->workflows;
    }
}
