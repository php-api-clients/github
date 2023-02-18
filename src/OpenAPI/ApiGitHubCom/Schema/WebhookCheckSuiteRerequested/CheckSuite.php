<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteRerequested;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteRerequested\CheckSuite\App;

final readonly class CheckSuite
{
    public const SCHEMA_JSON        = '{"required":["id","node_id","head_branch","head_sha","status","conclusion","url","before","after","pull_requests","app","created_at","updated_at","latest_check_runs_count","check_runs_url","head_commit"],"type":"object","properties":{"after":{"type":["string","null"]},"app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":"object","properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","pull_request_review_thread","merge_queue_entry","workflow_job"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write","admin"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"before":{"type":["string","null"]},"check_runs_url":{"type":"string","format":"uri"},"conclusion":{"enum":["success","failure","neutral","cancelled","timed_out","action_required","stale",null],"type":["string","null"],"description":"The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`,` neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed."},"created_at":{"type":"string","format":"date-time"},"head_branch":{"type":["string","null"],"description":"The head branch name the changes are on."},"head_commit":{"title":"SimpleCommit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"author":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"committer":{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."},"id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string"},"tree_id":{"type":"string"}}},"head_sha":{"type":"string","description":"The SHA of the head commit that is being checked."},"id":{"type":"integer"},"latest_check_runs_count":{"type":"integer"},"node_id":{"type":"string"},"pull_requests":{"type":"array","items":{"title":"Check Run Pull Request","required":["url","id","number","head","base"],"type":"object","properties":{"base":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"head":{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}},"id":{"type":"integer"},"number":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"description":"An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite\'s `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty."},"rerequestable":{"type":"boolean"},"runs_rerequestable":{"type":"boolean"},"status":{"enum":["requested","in_progress","completed","queued",null],"type":["string","null"],"description":"The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL that points to the check suite API resource.","format":"uri"}},"description":"The [check_suite](https:\\/\\/docs.github.com\\/rest\\/reference\\/checks#suites)."}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = 'The [check_suite](https://docs.github.com/rest/reference/checks#suites).';
    public ?string $after;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public ?App $app;
    public ?string $before;
    public ?string $check_runs_url;
    /**
     * The summary conclusion for all check runs that are part of the check suite. Can be one of `success`, `failure`,` neutral`, `cancelled`, `timed_out`, `action_required` or `stale`. This value will be `null` until the check run has completed.
     */
    public ?string $conclusion;
    public ?string $created_at;
    /**
     * The head branch name the changes are on.
     */
    public ?string $head_branch;
    public ?HeadCommit $head_commit;
    /**
     * The SHA of the head commit that is being checked.
     */
    public ?string $head_sha;
    public ?int $id;
    public ?int $latest_check_runs_count;
    public ?string $node_id;
    /**
     * An array of pull requests that match this check suite. A pull request matches a check suite if they have the same `head_sha` and `head_branch`. When the check suite's `head_branch` is in a forked repository it will be `null` and the `pull_requests` array will be empty.
     */
    public ?array $pull_requests;
    public bool $rerequestable;
    public bool $runs_rerequestable;
    /**
     * The summary status for all check runs that are part of the check suite. Can be `requested`, `in_progress`, or `completed`.
     */
    public ?string $status;
    public ?string $updated_at;
    /**
     * URL that points to the check suite API resource.
     */
    public ?string $url;

    public function __construct(string $after, App $app, string $before, string $check_runs_url, string $conclusion, string $created_at, string $head_branch, HeadCommit $head_commit, string $head_sha, int $id, int $latest_check_runs_count, string $node_id, array $pull_requests, bool $rerequestable, bool $runs_rerequestable, string $status, string $updated_at, string $url)
    {
        $this->after                   = $after;
        $this->app                     = $app;
        $this->before                  = $before;
        $this->check_runs_url          = $check_runs_url;
        $this->conclusion              = $conclusion;
        $this->created_at              = $created_at;
        $this->head_branch             = $head_branch;
        $this->head_commit             = $head_commit;
        $this->head_sha                = $head_sha;
        $this->id                      = $id;
        $this->latest_check_runs_count = $latest_check_runs_count;
        $this->node_id                 = $node_id;
        $this->pull_requests           = $pull_requests;
        $this->rerequestable           = $rerequestable;
        $this->runs_rerequestable      = $runs_rerequestable;
        $this->status                  = $status;
        $this->updated_at              = $updated_at;
        $this->url                     = $url;
    }
}
