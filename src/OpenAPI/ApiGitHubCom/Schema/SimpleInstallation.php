<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleInstallation
{
    public const SCHEMA_JSON = '{"title":"Simple Installation","required":["id","node_id"],"type":"object","properties":{"id":{"type":"integer","description":"The ID of the installation.","examples":[1]},"node_id":{"type":"string","description":"The global node ID of the installation.","examples":["MDQ6VXNlcjU4MzIzMQ=="]}},"description":"The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App."}';
    public const SCHEMA_TITLE = 'Simple Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.';
    /**
     * The ID of the installation.
     */
    public readonly int $id;
    /**
     * The global node ID of the installation.
     */
    public readonly string $node_id;
    public function __construct(int $id, string $node_id)
    {
        $this->id = $id;
        $this->node_id = $node_id;
    }
}
