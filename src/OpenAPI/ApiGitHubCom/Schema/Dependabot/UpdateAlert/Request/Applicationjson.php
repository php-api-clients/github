<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Dependabot\UpdateAlert\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON        = '{"required":["state"],"type":"object","properties":{"state":{"enum":["dismissed","open"],"type":"string","description":"The state of the Dependabot alert.\\nA `dismissed_reason` must be provided when setting the state to `dismissed`."},"dismissed_reason":{"enum":["fix_started","inaccurate","no_bandwidth","not_used","tolerable_risk"],"type":"string","description":"**Required when `state` is `dismissed`.** A reason for dismissing the alert."},"dismissed_comment":{"maxLength":280,"type":"string","description":"An optional comment associated with dismissing the alert."}},"additionalProperties":false}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The state of the Dependabot alert.
    A `dismissed_reason` must be provided when setting the state to `dismissed`.
     */
    public ?string $state;
    /**
     * **Required when `state` is `dismissed`.** A reason for dismissing the alert.
     */
    public string $dismissed_reason;
    /**
     * An optional comment associated with dismissing the alert.
     */
    public string $dismissed_comment;

    public function __construct(string $state, string $dismissed_reason, string $dismissed_comment)
    {
        $this->state             = $state;
        $this->dismissed_reason  = $dismissed_reason;
        $this->dismissed_comment = $dismissed_comment;
    }
}
