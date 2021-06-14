<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class AlertInstance
{
    public const SCHEMA_TITLE = 'Alert Instance';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`.
     */
    private string $ref;
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    private string $analysis_key;
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    private string $environment;
    /**
     * State of a code scanning alert.
     */
    private string $state;
    private ?string $commit_sha = null;
    private array $message = array();
    private array $location = array();
    private array $classifications = array();
    /**
     * The full Git reference, formatted as `refs/heads/<branch name>`.
     */
    public function ref() : string
    {
        return $this->ref;
    }
    /**
     * Identifies the configuration under which the analysis was executed. For example, in GitHub Actions this includes the workflow filename and job name.
     */
    public function analysis_key() : string
    {
        return $this->analysis_key;
    }
    /**
     * Identifies the variable values associated with the environment in which the analysis that generated this alert instance was performed, such as the language that was analyzed.
     */
    public function environment() : string
    {
        return $this->environment;
    }
    /**
     * State of a code scanning alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    public function commit_sha() : ?string
    {
        return $this->commit_sha;
    }
    public function message() : array
    {
        return $this->message;
    }
    public function location() : array
    {
        return $this->location;
    }
    public function classifications() : array
    {
        return $this->classifications;
    }
}
