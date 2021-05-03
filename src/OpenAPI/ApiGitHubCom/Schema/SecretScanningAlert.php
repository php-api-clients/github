<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningAlert
{
    public const SCHEMA_TITLE = 'secret-scanning-alert';
    public const SPL_HASH = '0000000054d5ecfd0000000071115dec';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The security alert number.
     */
    private int $number;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    /**
     * The REST API URL of the alert resource.
     */
    private string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    /**
     * Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`.
     */
    private string $state;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert. Can be one of `false_positive`, `wont_fix`, `revoked`, or `used_in_tests`.
     */
    private string $resolution;
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $resolved_at;
    /**
     * Simple User
     */
    private object $resolved_by;
    /**
     * The type of secret that secret scanning detected.
     */
    private string $secret_type;
    /**
     * The secret that was detected.
     */
    private string $secret;
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
    public function state() : string
    {
        return $this->state;
    }
    public function resolution() : string
    {
        return $this->resolution;
    }
    public function resolved_at() : string
    {
        return $this->resolved_at;
    }
    public function resolved_by() : object
    {
        return $this->resolved_by;
    }
    public function secret_type() : string
    {
        return $this->secret_type;
    }
    public function secret() : string
    {
        return $this->secret;
    }
}
