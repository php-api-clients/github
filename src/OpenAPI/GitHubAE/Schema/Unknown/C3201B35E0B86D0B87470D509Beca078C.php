<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C3201B35E0B86D0B87470D509Beca078C
{
    public const SCHEMA_JSON = '{"required":["url","id","node_id","state","creator","description","environment","target_url","created_at","updated_at","deployment_url","repository_url"],"type":"object","properties":{"created_at":{"type":"string"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"deployment_url":{"type":"string","format":"uri"},"description":{"type":"string","description":"The optional human-readable description added to the status."},"environment":{"type":"string"},"environment_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"log_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"performed_via_github_app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","pull_request_review_thread","merge_queue_entry","workflow_job","merge_group","secret_scanning_alert_location"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"repository_url":{"type":"string","format":"uri"},"state":{"type":"string","description":"The new state. Can be `pending`, `success`, `failure`, or `error`."},"target_url":{"type":"string","description":"The optional link added to the status."},"updated_at":{"type":"string"},"url":{"type":"string","format":"uri"}},"description":"The [deployment status](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/deployments#list-deployment-statuses)."}';
    public const SCHEMA_TITLE = 'c_3201b35e0b86d0b87470d509beca078c';
    public const SCHEMA_DESCRIPTION = 'The [deployment status](https://docs.github.com/github-ae@latest/rest/reference/deployments#list-deployment-statuses).';
    private string $created_at;
    private $creator;
    private string $deployment_url;
    /**
     * The optional human-readable description added to the status.
     */
    private string $description;
    private string $environment;
    private ?string $environment_url = null;
    private int $id;
    private ?string $log_url = null;
    private string $node_id;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    private $performed_via_github_app;
    private string $repository_url;
    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    private string $state;
    /**
     * The optional link added to the status.
     */
    private string $target_url;
    private string $updated_at;
    private string $url;
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function deployment_url() : string
    {
        return $this->deployment_url;
    }
    /**
     * The optional human-readable description added to the status.
     */
    public function description() : string
    {
        return $this->description;
    }
    public function environment() : string
    {
        return $this->environment;
    }
    public function environment_url() : ?string
    {
        return $this->environment_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function log_url() : ?string
    {
        return $this->log_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    /**
     * The new state. Can be `pending`, `success`, `failure`, or `error`.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The optional link added to the status.
     */
    public function target_url() : string
    {
        return $this->target_url;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function url() : string
    {
        return $this->url;
    }
}
