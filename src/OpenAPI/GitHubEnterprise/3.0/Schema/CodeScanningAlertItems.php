<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Schema;

final class CodeScanningAlertItems
{
    public const SCHEMA_TITLE = 'code-scanning-alert-items';
    public const SCHEMA_DESCRIPTION = '';
    /**The security alert number.**/
    private int $number;
    /**The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $created_at;
    /**The REST API URL of the alert resource.**/
    private string $url;
    /**The GitHub URL of the alert resource.**/
    private string $html_url;
    /**The REST API URL for fetching the list of instances for an alert.**/
    private string $instances_url;
    /**State of a code scanning alert.**/
    private string $state;
    /**Simple User**/
    private object $dismissed_by;
    /**The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $dismissed_at;
    /****Required when the state is dismissed.** The reason for dismissing or closing the alert. Can be one of: `false positive`, `won't fix`, and `used in tests`.**/
    private string $dismissed_reason;
    private object $rule;
    private object $tool;
    private object $most_recent_instance;
    public function number() : int
    {
        return $this->number;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function instances_url() : string
    {
        return $this->instances_url;
    }
    public function state() : string
    {
        return $this->state;
    }
    public function dismissed_by() : object
    {
        return $this->dismissed_by;
    }
    public function dismissed_at() : string
    {
        return $this->dismissed_at;
    }
    public function dismissed_reason() : string
    {
        return $this->dismissed_reason;
    }
    public function rule() : object
    {
        return $this->rule;
    }
    public function tool() : object
    {
        return $this->tool;
    }
    public function most_recent_instance() : object
    {
        return $this->most_recent_instance;
    }
}
