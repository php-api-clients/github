<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnvironmentApprovals;

final class Environments
{
    public const SCHEMA_TITLE = 'environment-approvals::environments';
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
