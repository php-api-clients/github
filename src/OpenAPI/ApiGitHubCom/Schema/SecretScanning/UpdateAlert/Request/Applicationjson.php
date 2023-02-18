<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecretScanning\UpdateAlert\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolution_comment":{"type":["string","null"],"description":"An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`."}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    public ?string $state;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    public ?string $resolution;
    /**
     * An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.
     */
    public ?string $resolution_comment;

    public function __construct(string $state, string $resolution, string $resolution_comment)
    {
        $this->state              = $state;
        $this->resolution         = $resolution;
        $this->resolution_comment = $resolution_comment;
    }
}
