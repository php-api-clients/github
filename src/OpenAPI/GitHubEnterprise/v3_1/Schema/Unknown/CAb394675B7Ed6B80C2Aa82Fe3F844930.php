<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CAb394675B7Ed6B80C2Aa82Fe3F844930
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","resolved"],"type":"string","description":"Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`."},"resolution":{"enum":[null,"false_positive","wont_fix","revoked","used_in_tests"],"type":["string","null"],"description":"**Required when the `state` is `resolved`.** The reason for resolving the alert."}}}';
    public const SCHEMA_TITLE = 'c_ab394675b7ed6b80c2aa82fe3f844930';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`.
     */
    private string $state;
    /**
     * **Required when the `state` is `resolved`.** The reason for resolving the alert.
     */
    private $resolution;
    /**
     * Sets the state of the secret scanning alert. Can be either `open` or `resolved`. You must provide `resolution` when you set the state to `resolved`.
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
}
