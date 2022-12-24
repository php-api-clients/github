<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C1Edad2110826Aae1Ede41Af5Bf3E4De0
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."}}}';
    public const SCHEMA_TITLE = 'c_1edad2110826aae1ede41af5bf3e4de0';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     */
    private string $state;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    private $dismissed_reason;
    /**
     * Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public function dismissed_reason()
    {
        return $this->dismissed_reason;
    }
}
