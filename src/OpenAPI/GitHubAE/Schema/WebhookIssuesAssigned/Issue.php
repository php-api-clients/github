<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookIssuesAssigned;

final class Issue
{
    public const SCHEMA_JSON = '{"title":"Issue","required":["url","repository_url","labels_url","comments_url","events_url","html_url","id","node_id","number","title","user","assignees","milestone","comments","created_at","updated_at","closed_at","author_association","active_lock_reason","body","reactions"],"type":"object","properties":{"active_lock_reason":{"enum":["resolved","off-topic","too heated","spam",null],"type":["string","null"]},"assignee":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"assignees":{"type":"array","items":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"author_association":{"title":"AuthorAssociation","enum":["COLLABORATOR","CONTRIBUTOR","FIRST_TIMER","FIRST_TIME_CONTRIBUTOR","MANNEQUIN","MEMBER","NONE","OWNER"],"type":"string","description":"How the author is associated with the repository."},"body":{"type":["string","null"],"description":"Contents of the issue"},"closed_at":{"type":["string","null"],"format":"date-time"},"comments":{"type":"integer"},"comments_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"draft":{"type":"boolean"},"events_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels":{"type":"array","items":{"title":"Label","required":["id","node_id","url","name","color","default","description"],"type":"object","properties":{"color":{"type":"string","description":"6-character hex code, without the leading #, identifying the color"},"default":{"type":"boolean"},"description":{"type":["string","null"]},"id":{"type":"integer"},"name":{"type":"string","description":"The name of the label."},"node_id":{"type":"string"},"url":{"type":"string","description":"URL for the label","format":"uri"}}}},"labels_url":{"type":"string","format":"uri-template"},"locked":{"type":"boolean"},"milestone":{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":["object","null"],"properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."},"node_id":{"type":"string"},"number":{"type":"integer"},"performed_via_github_app":{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run","reminder","pull_request_review_thread"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write","admin"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."},"pull_request":{"type":"object","properties":{"diff_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"merged_at":{"type":["string","null"],"format":"date-time"},"patch_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}},"reactions":{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}},"repository_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the issue; either \'open\' or \'closed\'"},"state_reason":{"type":["string","null"]},"timeline_url":{"type":"string","format":"uri"},"title":{"type":"string","description":"Title of the issue"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","description":"URL for the issue","format":"uri"},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}},"description":"The [issue](https:\\/\\/docs.github.com\\/github-ae@latest\\/rest\\/reference\\/issues) itself."}';
    public const SCHEMA_TITLE = 'Issue';
    public const SCHEMA_DESCRIPTION = 'The [issue](https://docs.github.com/github-ae@latest/rest/reference/issues) itself.';
    private $active_lock_reason;
    private $assignee;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Assignees>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Assignees::class)
     */
    private array $assignees = array();
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * Contents of the issue
     */
    private $body;
    private $closed_at;
    private int $comments;
    private string $comments_url;
    private string $created_at;
    private ?bool $draft = null;
    private string $events_url;
    private string $html_url;
    private int $id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Labels::class)
     */
    private array $labels = array();
    private string $labels_url;
    private ?bool $locked = null;
    /**
     * A collection of related issues and pull requests.
     */
    private $milestone;
    private string $node_id;
    private int $number;
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    private $performed_via_github_app;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\PullRequest::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\PullRequest $pull_request = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Reactions::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Reactions $reactions;
    private string $repository_url;
    /**
     * State of the issue; either 'open' or 'closed'
     */
    private ?string $state = null;
    private $state_reason;
    private ?string $timeline_url = null;
    /**
     * Title of the issue
     */
    private string $title;
    private string $updated_at;
    /**
     * URL for the issue
     */
    private string $url;
    private $user;
    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }
    public function assignee()
    {
        return $this->assignee;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Assignees>
     */
    public function assignees() : array
    {
        return $this->assignees;
    }
    /**
     * How the author is associated with the repository.
     */
    public function author_association() : string
    {
        return $this->author_association;
    }
    /**
     * Contents of the issue
     */
    public function body()
    {
        return $this->body;
    }
    public function closed_at()
    {
        return $this->closed_at;
    }
    public function comments() : int
    {
        return $this->comments;
    }
    public function comments_url() : string
    {
        return $this->comments_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function draft() : ?bool
    {
        return $this->draft;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Labels>
     */
    public function labels() : array
    {
        return $this->labels;
    }
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    public function locked() : ?bool
    {
        return $this->locked;
    }
    /**
     * A collection of related issues and pull requests.
     */
    public function milestone()
    {
        return $this->milestone;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    /**
     * GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.
     */
    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
    public function pull_request() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\PullRequest
    {
        return $this->pull_request;
    }
    public function reactions() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Issue\Reactions
    {
        return $this->reactions;
    }
    public function repository_url() : string
    {
        return $this->repository_url;
    }
    /**
     * State of the issue; either 'open' or 'closed'
     */
    public function state() : ?string
    {
        return $this->state;
    }
    public function state_reason()
    {
        return $this->state_reason;
    }
    public function timeline_url() : ?string
    {
        return $this->timeline_url;
    }
    /**
     * Title of the issue
     */
    public function title() : string
    {
        return $this->title;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * URL for the issue
     */
    public function url() : string
    {
        return $this->url;
    }
    public function user()
    {
        return $this->user;
    }
}
