<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PendingDeployment;

final readonly class Environment
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The id of the environment.
     */
    public ?int $id;
    public ?string $node_id;
    /**
     * The name of the environment.
     */
    public ?string $name;
    public ?string $url;
    public ?string $html_url;

    public function __construct(int $id, string $node_id, string $name, string $url, string $html_url)
    {
        $this->id       = $id;
        $this->node_id  = $node_id;
        $this->name     = $name;
        $this->url      = $url;
        $this->html_url = $html_url;
    }
}
