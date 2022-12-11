<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class DeploymentBranchPolicy
{
    public const SCHEMA_TITLE = 'Deployment branch policy';
    public const SCHEMA_DESCRIPTION = 'Details of a deployment branch policy.';
    /**
     * The unique identifier of the branch policy.
     */
    private int $id;
    private string $node_id;
    /**
     * The name pattern that branches must match in order to deploy to the environment.
     */
    private string $name;
    /**
     * The unique identifier of the branch policy.
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
     * The name pattern that branches must match in order to deploy to the environment.
     */
    public function name() : string
    {
        return $this->name;
    }
}
