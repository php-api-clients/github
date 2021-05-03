<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class EnvironmentApprovals
{
    public const SCHEMA_TITLE = 'Environment Approval';
    public const SPL_HASH = '00000000729dcf1800000000797f0b2e';
    public const SCHEMA_DESCRIPTION = 'An entry in the reviews log for environment deployments';
    /**
     * The list of environments that were approved or rejected
     */
    private array $environments = array();
    /**
     * Whether deployment to the environment(s) was approved or rejected
     */
    private ?string $state = null;
    /**
     * Simple User
     */
    private ?object $user = null;
    /**
     * The comment submitted with the deployment review
     */
    private ?string $comment = null;
    public function environments() : array
    {
        return $this->environments;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function user() : ?object
    {
        return $this->user;
    }
    public function comment() : ?string
    {
        return $this->comment;
    }
}
