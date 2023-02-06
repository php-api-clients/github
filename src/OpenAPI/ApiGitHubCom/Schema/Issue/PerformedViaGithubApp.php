<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Issue;

final class PerformedViaGithubApp
{
    public const SCHEMA_JSON = '{"title":"App","required":["id","node_id","owner","name","description","external_url","html_url","created_at","updated_at"],"type":["object","null"],"properties":{"created_at":{"type":["string","null"],"format":"date-time"},"description":{"type":["string","null"]},"events":{"type":"array","items":{"enum":["branch_protection_rule","check_run","check_suite","code_scanning_alert","commit_comment","content_reference","create","delete","deployment","deployment_review","deployment_status","deploy_key","discussion","discussion_comment","fork","gollum","issues","issue_comment","label","member","membership","milestone","organization","org_block","page_build","project","project_card","project_column","public","pull_request","pull_request_review","pull_request_review_comment","push","registry_package","release","repository","repository_dispatch","secret_scanning_alert","star","status","team","team_add","watch","workflow_dispatch","workflow_run"],"type":"string"},"description":"The list of events for the GitHub app"},"external_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":["integer","null"],"description":"Unique identifier of the GitHub app"},"name":{"type":"string","description":"The name of the GitHub app"},"node_id":{"type":"string"},"owner":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"permissions":{"type":"object","properties":{"actions":{"enum":["read","write"],"type":"string"},"administration":{"enum":["read","write"],"type":"string"},"checks":{"enum":["read","write"],"type":"string"},"content_references":{"enum":["read","write"],"type":"string"},"contents":{"enum":["read","write"],"type":"string"},"deployments":{"enum":["read","write"],"type":"string"},"discussions":{"enum":["read","write"],"type":"string"},"emails":{"enum":["read","write"],"type":"string"},"environments":{"enum":["read","write"],"type":"string"},"issues":{"enum":["read","write"],"type":"string"},"keys":{"enum":["read","write"],"type":"string"},"members":{"enum":["read","write"],"type":"string"},"metadata":{"enum":["read","write"],"type":"string"},"organization_administration":{"enum":["read","write"],"type":"string"},"organization_hooks":{"enum":["read","write"],"type":"string"},"organization_packages":{"enum":["read","write"],"type":"string"},"organization_plan":{"enum":["read","write"],"type":"string"},"organization_projects":{"enum":["read","write"],"type":"string"},"organization_secrets":{"enum":["read","write"],"type":"string"},"organization_self_hosted_runners":{"enum":["read","write"],"type":"string"},"organization_user_blocking":{"enum":["read","write"],"type":"string"},"packages":{"enum":["read","write"],"type":"string"},"pages":{"enum":["read","write"],"type":"string"},"pull_requests":{"enum":["read","write"],"type":"string"},"repository_hooks":{"enum":["read","write"],"type":"string"},"repository_projects":{"enum":["read","write"],"type":"string"},"secret_scanning_alerts":{"enum":["read","write"],"type":"string"},"secrets":{"enum":["read","write"],"type":"string"},"security_events":{"enum":["read","write"],"type":"string"},"security_scanning_alert":{"enum":["read","write"],"type":"string"},"single_file":{"enum":["read","write"],"type":"string"},"statuses":{"enum":["read","write"],"type":"string"},"team_discussions":{"enum":["read","write"],"type":"string"},"vulnerability_alerts":{"enum":["read","write"],"type":"string"},"workflows":{"enum":["read","write"],"type":"string"}},"description":"The set of permissions for the GitHub app"},"slug":{"type":"string","description":"The slug name of the GitHub app"},"updated_at":{"type":["string","null"],"format":"date-time"}},"description":"GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub."}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'App';
    public const SCHEMA_DESCRIPTION = 'GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.';
    public readonly ?string $created_at;
    public readonly ?string $description;
    /**
     * The list of events for the GitHub app
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp\Events>
     */
    public readonly array $events;
    public readonly ?string $external_url;
    public readonly string $html_url;
    /**
     * Unique identifier of the GitHub app
     */
    public readonly ?int $id;
    /**
     * The name of the GitHub app
     */
    public readonly string $name;
    public readonly string $node_id;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp\Owner $owner;
    /**
     * The set of permissions for the GitHub app
     */
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp\Permissions $permissions;
    /**
     * The slug name of the GitHub app
     */
    public readonly ?string $slug;
    public readonly ?string $updated_at;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp\Events> $events
     */
    public function __construct(string $created_at, string $description, array $events, string $external_url, string $html_url, int $id, string $name, string $node_id, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp\Owner $owner, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PerformedViaGithubApp\Permissions $permissions, string $slug, string $updated_at)
    {
        $this->created_at = $created_at;
        $this->description = $description;
        $this->events = $events;
        $this->external_url = $external_url;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->owner = $owner;
        $this->permissions = $permissions;
        $this->slug = $slug;
        $this->updated_at = $updated_at;
    }
}
