<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateAlert;

final class Request
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."},"resolution_comment":{"type":["string","null"],"description":"An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`."}}}';
    public const SCHEMA_TITLE = 'UpdateAlert\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sets the state of the secret scanning alert. You must provide `resolution` when you set the state to `resolved`.
     */
    private string $state;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    private ?string $resolution = null;
    /**
     * An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.
     */
    private ?string $resolution_comment = null;
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
    public function resolution() : ?string
    {
        return $this->resolution;
    }
    /**
     * An optional comment when closing an alert. Cannot be updated or deleted. Must be `null` when changing `state` to `open`.
     */
    public function resolution_comment() : ?string
    {
        return $this->resolution_comment;
    }
}
