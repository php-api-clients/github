<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookMilestoneClosed;

final class Milestone
{
    public const SCHEMA_JSON = '{"title":"Milestone","required":["url","html_url","labels_url","id","node_id","number","title","description","creator","open_issues","closed_issues","state","created_at","updated_at","due_on","closed_at"],"type":"object","properties":{"closed_at":{"type":["string","null"],"format":"date-time"},"closed_issues":{"type":"integer"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}},"description":{"type":["string","null"]},"due_on":{"type":["string","null"],"format":"date-time"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"labels_url":{"type":"string","format":"uri"},"node_id":{"type":"string"},"number":{"type":"integer","description":"The number of the milestone."},"open_issues":{"type":"integer"},"state":{"enum":["open","closed"],"type":"string","description":"The state of the milestone."},"title":{"type":"string","description":"The title of the milestone."},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}},"description":"A collection of related issues and pull requests."}';
    public const SCHEMA_TITLE = 'Milestone';
    public const SCHEMA_DESCRIPTION = 'A collection of related issues and pull requests.';
    private $closed_at;
    private int $closed_issues;
    private string $created_at;
    private $creator;
    private $description;
    private $due_on;
    private string $html_url;
    private int $id;
    private string $labels_url;
    private string $node_id;
    /**
     * The number of the milestone.
     */
    private int $number;
    private int $open_issues;
    /**
     * The state of the milestone.
     */
    private string $state;
    /**
     * The title of the milestone.
     */
    private string $title;
    private string $updated_at;
    private string $url;
    public function closed_at()
    {
        return $this->closed_at;
    }
    public function closed_issues() : int
    {
        return $this->closed_issues;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function creator()
    {
        return $this->creator;
    }
    public function description()
    {
        return $this->description;
    }
    public function due_on()
    {
        return $this->due_on;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function labels_url() : string
    {
        return $this->labels_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The number of the milestone.
     */
    public function number() : int
    {
        return $this->number;
    }
    public function open_issues() : int
    {
        return $this->open_issues;
    }
    /**
     * The state of the milestone.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * The title of the milestone.
     */
    public function title() : string
    {
        return $this->title;
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
