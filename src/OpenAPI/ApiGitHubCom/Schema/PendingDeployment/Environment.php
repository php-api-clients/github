<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PendingDeployment;

final class Environment
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]}}}';
    public const SCHEMA_TITLE = 'PendingDeployment\\Environment';
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
}
