<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecretScanningAlert
{
    public const SCHEMA_TITLE       = 'secret-scanning-alert';
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
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?SimpleUser $resolved_by = null;
    /**
     * The type of secret that secret scanning detected.
     */
    private ?string $secret_type = null;
    /**
     * The secret that was detected.
     */
    private ?string $secret = null;

    /**
     * The security alert number.
     */
    public function number(): ?int
    {
        return $this->number;
    }

    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at(): ?string
    {
        return $this->created_at;
    }

    /**
     * The REST API URL of the alert resource.
     */
    public function url(): ?string
    {
        return $this->url;
    }

    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url(): ?string
    {
        return $this->html_url;
    }

    /**
     * Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`.
     */
    public function state(): ?string
    {
        return $this->state;
    }

    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert. Can be one of `false_positive`, `wont_fix`, `revoked`, or `used_in_tests`.
     */
    public function resolution(): ?string
    {
        return $this->resolution;
    }

    /**
     * The time that the alert was resolved in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function resolved_at(): ?string
    {
        return $this->resolved_at;
    }

    /**
     * Simple User
     */
    public function resolved_by(): ?SimpleUser
    {
        return $this->resolved_by;
    }

    /**
     * The type of secret that secret scanning detected.
     */
    public function secret_type(): ?string
    {
        return $this->secret_type;
    }

    /**
     * The secret that was detected.
     */
    public function secret(): ?string
    {
        return $this->secret;
    }
}
