<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class EnvironmentApprovals
{
    public const SCHEMA_TITLE = 'Environment Approval';
    public const SPL_HASH = '0000000020701c320000000042193899';
    public const SCHEMA_DESCRIPTION = 'An entry in the reviews log for environment deployments';
    /**
     * The list of environments that were approved or rejected
     */
    private array $environments;
    /**
     * Whether deployment to the environment(s) was approved or rejected
     */
    private string $state;
    /**
     * Simple User
     */
    private object $user;
    /**
     * The comment submitted with the deployment review
     */
    private string $comment;
    public function environments() : array
    {
        return $this->environments;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function user() : object
    {
        return $this->user;
    }
    public function comment() : string
    {
        return $this->comment;
    }
}
