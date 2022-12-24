<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C66B3C0Ecb8A403D51E8A0A3980E5E205
{
    public const SCHEMA_JSON = '{"title":"Project","required":["owner_url","url","html_url","columns_url","id","node_id","name","body","number","state","creator","created_at","updated_at"],"type":"object","properties":{"body":{"type":["string","null"],"description":"Body of the project"},"columns_url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"creator":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"name":{"type":"string","description":"Name of the project"},"node_id":{"type":"string"},"number":{"type":"integer"},"owner_url":{"type":"string","format":"uri"},"state":{"enum":["open","closed"],"type":"string","description":"State of the project; either \'open\' or \'closed\'"},"updated_at":{"type":"string","format":"date-time"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'Project';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Body of the project
     */
    private $body;
    private string $columns_url;
    private string $created_at;
    private $creator;
    private string $html_url;
    private int $id;
    /**
     * Name of the project
     */
    private string $name;
    private string $node_id;
    private int $number;
    private string $owner_url;
    /**
     * State of the project; either 'open' or 'closed'
     */
    private string $state;
    private string $updated_at;
    private string $url;
    /**
     * Body of the project
     */
    public function body()
    {
        return $this->body;
    }
    public function columns_url() : string
    {
        return $this->columns_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function creator()
    {
        return $this->creator;
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
     * Name of the project
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function owner_url() : string
    {
        return $this->owner_url;
    }
    /**
     * State of the project; either 'open' or 'closed'
     */
    public function state() : string
    {
        return $this->state;
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
