<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC9C1F0E9A9Aa74978Ac1D364440C6D6A
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."}}}';
    public const SCHEMA_TITLE = 'c_c9c1f0e9a9aa74978ac1d364440c6d6a';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     */
    private string $state;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    private ?string $dismissed_reason = null;
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    private ?string $dismissed_comment = null;
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
    public function dismissed_reason() : ?string
    {
        return $this->dismissed_reason;
    }
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    public function dismissed_comment() : ?string
    {
        return $this->dismissed_comment;
    }
}
