<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C4E2Dc17Bf0Fbc867Fabab40Eafe9Ebd0
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["dismissed","open"],"type":"string","description":"The state of the Dependabot alert.\\nA `dismissed_reason` must be provided when setting the state to `dismissed`."},"dismissed_reason":{"enum":["fix_started","inaccurate","no_bandwidth","not_used","tolerable_risk"],"type":"string","description":"**Required when `state` is `dismissed`.** A reason for dismissing the alert."},"dismissed_comment":{"maxLength":280,"type":"string","description":"An optional comment associated with dismissing the alert."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_4e2dc17bf0fbc867fabab40eafe9ebd0';
    public const SCHEMA_DESCRIPTION = '';
    /**
    * The state of the Dependabot alert.
    A `dismissed_reason` must be provided when setting the state to `dismissed`.
    */
    private string $state;
    /**
     * **Required when `state` is `dismissed`.** A reason for dismissing the alert.
     */
    private ?string $dismissed_reason = null;
    /**
     * An optional comment associated with dismissing the alert.
     */
    private ?string $dismissed_comment = null;
    /**
    * The state of the Dependabot alert.
    A `dismissed_reason` must be provided when setting the state to `dismissed`.
    */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * **Required when `state` is `dismissed`.** A reason for dismissing the alert.
     */
    public function dismissed_reason() : ?string
    {
        return $this->dismissed_reason;
    }
    /**
     * An optional comment associated with dismissing the alert.
     */
    public function dismissed_comment() : ?string
    {
        return $this->dismissed_comment;
    }
}
