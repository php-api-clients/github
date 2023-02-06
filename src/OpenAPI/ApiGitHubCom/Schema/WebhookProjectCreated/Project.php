<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectCreated;

final class Project
{
    public const SCHEMA_JSON = '{"title":"Project","required":["owner_url","url","html_url","columns_url","id","node_id","name","body","number","state","creator","created_at","updated_at"],"type":"object","properties":{"body":{"type":["string","null"],"description":"Body of the project"},"columns_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string","description":"Name of the project"},"node_id":{"type":"string"},"number":{"type":"integer"},"owner_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the project; either \'open\' or \'closed\'"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Project';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Body of the project
     */
    public readonly ?string $body;
    public readonly string $columns_url;
    public readonly string $created_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project\Creator $creator;
    public readonly string $html_url;
    public readonly int $id;
    /**
     * Name of the project
     */
    public readonly string $name;
    public readonly string $node_id;
    public readonly int $number;
    public readonly string $owner_url;
    /**
     * State of the project; either 'open' or 'closed'
     */
    public readonly string $state;
    public readonly string $updated_at;
    public readonly string $url;
    public function __construct(string $body, string $columns_url, string $created_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Project\Creator $creator, string $html_url, int $id, string $name, string $node_id, int $number, string $owner_url, string $state, string $updated_at, string $url)
    {
        $this->body = $body;
        $this->columns_url = $columns_url;
        $this->created_at = $created_at;
        $this->creator = $creator;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->number = $number;
        $this->owner_url = $owner_url;
        $this->state = $state;
        $this->updated_at = $updated_at;
        $this->url = $url;
    }
}
