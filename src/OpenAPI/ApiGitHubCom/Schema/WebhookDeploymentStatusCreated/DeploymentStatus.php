<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentStatusCreated;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Discussion\AnswerChosenBy;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookDeploymentStatusCreated\DeploymentStatus\PerformedViaGithubApp;

final readonly class DeploymentStatus
{
    public const SCHEMA_JSON        = '{"required":["url","id","node_id","state","creator","description","environment","target_url","created_at","updated_at","deployment_url","repository_url"],"type":"object","properties":{"created_at":{"type":"string"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"deployment_url":{"type":"string","format":"uri"},"description":{"type":"string","description":"The optional human-readable description added to the status."},"environment":{"type":"string"},"environment_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"log_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"performed_via_github_app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","pull_request_review_thread","merge_queue_entry","workflow_job","merge_group","secret_scanning_alert_location"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"repository_url":{"type":"string","format":"uri"},"state":{"type":"string","description":"The new state. Can be `pending`, `success`, `failure`, or `error`."},"target_url":{"type":"string","description":"The optional link added to the status."},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [deployment status](https:\\/\\/docs.github.com\\/rest\\/reference\\/deployments#list-deployment-statuses)."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The [deployment status](https://docs.github.com/rest/reference/deployments#list-deployment-statuses).';
    public ?string $created_at;
    public ?AnswerChosenBy $creator;
    public ?string $deployment_url;
    /**
     * The optional human-readable description added to the status.
     */
    public ?string $description;
    public ?string $environment;
    public string $environment_url;
    public ?int $id;
    public string $log_url;
    public ?string $node_id;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public ?PerformedViaGithubApp $performed_via_github_app;
    public ?string $repository_url;
    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    public ?string $state;
    /**
     * The optional link added to the status.
     */
    public ?string $target_url;
    public ?string $updated_at;
    public ?string $url;

    public function __construct(string $created_at, AnswerChosenBy $creator, string $deployment_url, string $description, string $environment, string $environment_url, int $id, string $log_url, string $node_id, PerformedViaGithubApp $performed_via_github_app, string $repository_url, string $state, string $target_url, string $updated_at, string $url)
    {
        $this->created_at               = $created_at;
        $this->creator                  = $creator;
        $this->deployment_url           = $deployment_url;
        $this->description              = $description;
        $this->environment              = $environment;
        $this->environment_url          = $environment_url;
        $this->id                       = $id;
        $this->log_url                  = $log_url;
        $this->node_id                  = $node_id;
        $this->performed_via_github_app = $performed_via_github_app;
        $this->repository_url           = $repository_url;
        $this->state                    = $state;
        $this->target_url               = $target_url;
        $this->updated_at               = $updated_at;
        $this->url                      = $url;
    }
}
