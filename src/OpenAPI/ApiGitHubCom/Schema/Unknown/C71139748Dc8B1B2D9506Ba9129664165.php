<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C71139748Dc8B1B2D9506Ba9129664165
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]},"created_at":{"type":"string","description":"The time that the environment was created, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]},"updated_at":{"type":"string","description":"The time that the environment was last updated, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]}}}';
    public const SCHEMA_TITLE = 'c_71139748dc8b1b2d9506ba9129664165';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The id of the environment.
     */
    private int $id;
    private string $node_id;
    /**
     * The name of the environment.
     */
    private string $name;
    private string $url;
    private string $html_url;
    /**
     * The time that the environment was created, in ISO 8601 format.
     */
    private string $created_at;
    /**
     * The time that the environment was last updated, in ISO 8601 format.
     */
    private string $updated_at;
    /**
     * The id of the environment.
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the environment.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The time that the environment was created, in ISO 8601 format.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The time that the environment was last updated, in ISO 8601 format.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
