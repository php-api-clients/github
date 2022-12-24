<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CAcb518Ba4E87D2Fd2Af1B1Eadf0484C1
{
    public const SCHEMA_JSON = '{"required":["id","node_id","head_branch","head_sha","status","conclusion","url","before","after","pull_requests","app","created_at","updated_at","latest_check_runs_count","check_runs_url","head_commit"],"type":"object","properties":{"after":{"type":["string","null"]},"app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":"object","properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","merge_group","pull_request_review_thread","workflow_job","merge_queue_entry","security_and_analysis","projects_v2_item","secret_scanning_alert_location"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"before":{"type":["string","null"]},"check_runs_url":{"type":"string","format":"uri"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null,"skipped","startup_failure"],"type":["string","null"],"description":"The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has `completed`."},"created_at":{"type":"string","format":"date-time"},"head_branch":{"type":["string","null"],"description":"The head branch name the changes are on."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}},"head_sha":{"type":"string","description":"The SHA of the head commit that is being checked."},"id":{"type":"integer"},"latest_check_runs_count":{"type":"integer"},"node_id":{"type":"string"},"pull_requests":{"type":"array","items":{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"description":"An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite\'s `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty."},"rerequestable":{"type":"boolean"},"runs_rerequestable":{"type":"boolean"},"status":{"enum":["requested","in_progress","completed","queued",null,"pending"],"type":["string","null"],"description":"The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL that points to the check suite API resource.","format":"uri"}},"description":"The [check_suite](https:\\/\\/docs.github.com\\/rest\\/reference\\/checks#suites)."}';
    public const SCHEMA_TITLE = 'c_acb518ba4e87d2fd2af1b1eadf0484c1';
    public const SCHEMA_DESCRIPTION = 'The [check_suite](https://docs.github.com/rest/reference/checks#suites).';
    private $after;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6808C95Ea7E149A727C48F92F10B50D0::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6808C95Ea7E149A727C48F92F10B50D0 $app;
    private $before;
    private string $check_runs_url;
    /**
     * The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has `completed`.
     */
    private $conclusion;
    private string $created_at;
    /**
     * The head branch name the changes are on.
     */
    private $head_branch;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE8Fbcc67C1B5057F473Fa20A7939956B::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE8Fbcc67C1B5057F473Fa20A7939956B $head_commit;
    /**
     * The SHA of the head commit that is being checked.
     */
    private string $head_sha;
    private int $id;
    private int $latest_check_runs_count;
    private string $node_id;
    /**
     * An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite's `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFf56Cc5Ba763Eea771Aa4Ac6F5624593>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFf56Cc5Ba763Eea771Aa4Ac6F5624593::class)
     */
    private array $pull_requests = array();
    private ?bool $rerequestable = null;
    private ?bool $runs_rerequestable = null;
    /**
     * The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`.
     */
    private $status;
    private string $updated_at;
    /**
     * URL that points to the check suite API resource.
     */
    private string $url;
    public function after()
    {
        return $this->after;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function app() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6808C95Ea7E149A727C48F92F10B50D0
    {
        return $this->app;
    }
    public function before()
    {
        return $this->before;
    }
    public function check_runs_url() : string
    {
        return $this->check_runs_url;
    }
    /**
     * The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`, `neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has `completed`.
     */
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The head branch name the changes are on.
     */
    public function head_branch()
    {
        return $this->head_branch;
    }
    public function head_commit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CE8Fbcc67C1B5057F473Fa20A7939956B
    {
        return $this->head_commit;
    }
    /**
     * The SHA of the head commit that is being checked.
     */
    public function head_sha() : string
    {
        return $this->head_sha;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function latest_check_runs_count() : int
    {
        return $this->latest_check_runs_count;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite's `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CFf56Cc5Ba763Eea771Aa4Ac6F5624593>
     */
    public function pull_requests() : array
    {
        return $this->pull_requests;
    }
    public function rerequestable() : ?bool
    {
        return $this->rerequestable;
    }
    public function runs_rerequestable() : ?bool
    {
        return $this->runs_rerequestable;
    }
    /**
     * The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`.
     */
    public function status()
    {
        return $this->status;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * URL that points to the check suite API resource.
     */
    public function url() : string
    {
        return $this->url;
    }
}
