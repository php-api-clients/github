<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PendingDeployment
{
    public const SCHEMA_TITLE = 'Pending Deployment';
    public const SCHEMA_DESCRIPTION = 'Details of a deployment that is waiting for protection rules to pass';
    private ?object $environment = null;
    /**
     * The set duration of the wait timer
     */
    private ?int $wait_timer = null;
    /**
     * The time that the wait timer began.
     */
    private ?string $wait_timer_started_at = null;
    /**
     * Whether the currently authenticated user can approve the deployment
     */
    private ?bool $current_user_can_approve = null;
    /**
     * The people or teams that may approve jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed.
     */
    private array $reviewers = array();
    public function environment() : ?object
    {
        return $this->environment;
    }
    public function wait_timer() : ?int
    {
        return $this->wait_timer;
    }
    public function wait_timer_started_at() : ?string
    {
        return $this->wait_timer_started_at;
    }
    public function current_user_can_approve() : ?bool
    {
        return $this->current_user_can_approve;
    }
    public function reviewers() : array
    {
        return $this->reviewers;
    }
}
