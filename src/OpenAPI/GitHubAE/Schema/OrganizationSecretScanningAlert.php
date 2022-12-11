<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class OrganizationSecretScanningAlert
{
    public const SCHEMA_TITLE = 'organization-secret-scanning-alert';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The security alert number.
     */
    private int $number;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    private $updated_at;
    /**
     * The REST API URL of the alert resource.
     */
    private string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    /**
     * The REST API URL of the code locations for this alert.
     */
    private string $locations_url;
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    private string $state;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    private $resolution;
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $resolved_at;
    private $resolved_by;
    /**
     * The type of secret that secret scanning detected.
     */
    private string $secret_type;
    /**
    * User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    */
    private string $secret_type_display_name;
    /**
     * The secret that was detected.
     */
    private string $secret;
    /**
     * A GitHub repository.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleRepository $repository;
    /**
     * Whether push protection was bypassed for the detected secret.
     */
    private $push_protection_bypassed;
    private $push_protection_bypassed_by;
    /**
     * The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $push_protection_bypassed_at;
    /**
     * The comment that was optionally added when this alert was closed
     */
    private $resolution_comment;
    /**
     * The security alert number.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    /**
     * The REST API URL of the alert resource.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The REST API URL of the code locations for this alert.
     */
    public function locations_url() : string
    {
        return $this->locations_url;
    }
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    public function resolution()
    {
        return $this->resolution;
    }
    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function resolved_at()
    {
        return $this->resolved_at;
    }
    public function resolved_by()
    {
        return $this->resolved_by;
    }
    /**
     * The type of secret that secret scanning detected.
     */
    public function secret_type() : string
    {
        return $this->secret_type;
    }
    /**
    * User-friendly name for the detected secret, matching the `secret_type`.
    For a list of built-in patterns, see "[Secret scanning patterns](https://docs.github.com/github-ae@latest/code-security/secret-scanning/secret-scanning-patterns#supported-secrets-for-advanced-security)."
    */
    public function secret_type_display_name() : string
    {
        return $this->secret_type_display_name;
    }
    /**
     * The secret that was detected.
     */
    public function secret() : string
    {
        return $this->secret;
    }
    /**
     * A GitHub repository.
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SimpleRepository
    {
        return $this->repository;
    }
    /**
     * Whether push protection was bypassed for the detected secret.
     */
    public function push_protection_bypassed()
    {
        return $this->push_protection_bypassed;
    }
    public function push_protection_bypassed_by()
    {
        return $this->push_protection_bypassed_by;
    }
    /**
     * The time that push protection was bypassed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function push_protection_bypassed_at()
    {
        return $this->push_protection_bypassed_at;
    }
    /**
     * The comment that was optionally added when this alert was closed
     */
    public function resolution_comment()
    {
        return $this->resolution_comment;
    }
}
