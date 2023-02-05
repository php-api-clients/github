<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NewIssue;

final class Milestone
{
    public const SCHEMA_JSON = '{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":["object","null"],"properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."}';
    public const SCHEMA_TITLE = 'Milestone';
    public const SCHEMA_DESCRIPTION = 'A collection of related issues and pull requests.';
    public readonly ?string $closed_at;
    public readonly int $closed_issues;
    public readonly string $created_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone\Creator $creator;
    public readonly ?string $description;
    public readonly ?string $due_on;
    public readonly string $html_url;
    public readonly int $id;
    public readonly string $labels_url;
    public readonly string $node_id;
    /**
     * The number of the milestone.
     */
    public readonly int $number;
    public readonly int $open_issues;
    /**
     * The state of the milestone.
     */
    public readonly string $state;
    /**
     * The title of the milestone.
     */
    public readonly string $title;
    public readonly string $updated_at;
    public readonly string $url;
    public function __construct(string $closed_at, int $closed_issues, string $created_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone\Creator $creator, string $description, string $due_on, string $html_url, int $id, string $labels_url, string $node_id, int $number, int $open_issues, string $state, string $title, string $updated_at, string $url)
    {
        $this->closed_at = $closed_at;
        $this->closed_issues = $closed_issues;
        $this->created_at = $created_at;
        $this->creator = $creator;
        $this->description = $description;
        $this->due_on = $due_on;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->labels_url = $labels_url;
        $this->node_id = $node_id;
        $this->number = $number;
        $this->open_issues = $open_issues;
        $this->state = $state;
        $this->title = $title;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
