<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SimpleInstallation
{
    public const SCHEMA_TITLE = 'Simple Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation. This property is included when the event is configured for and sent to a GitHub App.';
    /**
     * The ID of the installation.
     */
    private int $id;
    /**
     * The global node ID of the installation.
     */
    private string $node_id;
    /**
     * The ID of the installation.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The global node ID of the installation.
     */
    public function node_id() : string
    {
        return $this->node_id;
    }
}
