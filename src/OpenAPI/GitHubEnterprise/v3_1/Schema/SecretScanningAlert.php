<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class SecretScanningAlert
{
    public const SCHEMA_TITLE = 'secret-scanning-alert';
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
    /**
     * Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`.
     */
    private ?string $state = null;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert. Can be one of `false_positive`, `wont_fix`, `revoked`, or `used_in_tests`.
     */
    private ?string $resolution = null;
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $resolved_at = null;
    /**
     * Simple User
     */
    private array $resolved_by = array();
    /**
     * The type of secret that secret scanning detected.
     */
    private ?string $secret_type = null;
    /**
     * The secret that was detected.
     */
    private ?string $secret = null;
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
    public function state() : ?string
    {
        return $this->state;
    }
    public function resolution() : ?string
    {
        return $this->resolution;
    }
    public function resolved_at() : ?string
    {
        return $this->resolved_at;
    }
    public function resolved_by() : array
    {
        return $this->resolved_by;
    }
    public function secret_type() : ?string
    {
        return $this->secret_type;
    }
    public function secret() : ?string
    {
        return $this->secret;
    }
}
