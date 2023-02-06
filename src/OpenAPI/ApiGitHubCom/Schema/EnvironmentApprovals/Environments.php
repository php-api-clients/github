<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\EnvironmentApprovals;

final class Environments
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]},"created_at":{"type":"string","description":"The time that the environment was created, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]},"updated_at":{"type":"string","description":"The time that the environment was last updated, in ISO 8601 format.","format":"date-time","examples":["2020-11-23T22:00:40Z"]}}}';
    public const SCHEMA_EXAMPLE = '{"id":56780428,"node_id":"MDExOkVudmlyb25tZW50NTY3ODA0Mjg=","name":"staging","url":"https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging","html_url":"https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging","created_at":"2020-11-23T22:00:40Z","updated_at":"2020-11-23T22:00:40Z"}';
    public const SCHEMA_TITLE = 'EnvironmentApprovals\\Environments';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The id of the environment.
     */
    public readonly int $id;
    public readonly string $node_id;
    /**
     * The name of the environment.
     */
    public readonly string $name;
    public readonly string $url;
    public readonly string $html_url;
    /**
     * The time that the environment was created, in ISO 8601 format.
     */
    public readonly string $created_at;
    /**
     * The time that the environment was last updated, in ISO 8601 format.
     */
    public readonly string $updated_at;
    public function __construct(int $id, string $node_id, string $name, string $url, string $html_url, string $created_at, string $updated_at)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}
