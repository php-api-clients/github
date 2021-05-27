<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningAlert
{
    public const SCHEMA_TITLE = 'code-scanning-alert';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The security alert number.
     */
    private ?int $number = null;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $created_at = null;
    /**
     * The REST API URL of the alert resource.
     */
    private ?string $url = null;
    /**
     * The GitHub URL of the alert resource.
     */
    private ?string $html_url = null;
    private $instances;
    /**
     * The REST API URL for fetching the list of instances for an alert.
     */
    private ?string $instances_url = null;
    /**
     * State of a code scanning alert.
     */
    private ?string $state = null;
    /**
     * Simple User
     */
    private array $dismissed_by = array();
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $dismissed_at = null;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.
     */
    private ?string $dismissed_reason = null;
    private array $rule = array();
    private array $tool = array();
    private array $most_recent_instance = array();
    public function number() : ?int
    {
        return $this->number;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function instances()
    {
        return $this->instances;
    }
    public function instances_url() : ?string
    {
        return $this->instances_url;
    }
    public function state() : ?string
    {
        return $this->state;
    }
    public function dismissed_by() : array
    {
        return $this->dismissed_by;
    }
    public function dismissed_at() : ?string
    {
        return $this->dismissed_at;
    }
    public function dismissed_reason() : ?string
    {
        return $this->dismissed_reason;
    }
    public function rule() : array
    {
        return $this->rule;
    }
    public function tool() : array
    {
        return $this->tool;
    }
    public function most_recent_instance() : array
    {
        return $this->most_recent_instance;
    }
}
