<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanning\UpdateAlert\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["open","dismissed"],"type":"string","description":"Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`."},"dismissed_reason":{"enum":[null,"false positive","won\'t fix","used in tests"],"type":["string","null"],"description":"**Required when the state is dismissed.** The reason for dismissing or closing the alert."},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"The dismissal comment associated with the dismissal of the alert."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Sets the state of the code scanning alert. You must provide `dismissed_reason` when you set the state to `dismissed`.
     */
    public ?string $state;
    /**
     * **Required when the state is dismissed.** The reason for dismissing or closing the alert.
     */
    public ?string $dismissed_reason;
    /**
     * The dismissal comment associated with the dismissal of the alert.
     */
    public ?string $dismissed_comment;
    public function __construct(string $state, string $dismissed_reason, string $dismissed_comment)
    {
        $this->state = $state;
        $this->dismissed_reason = $dismissed_reason;
        $this->dismissed_comment = $dismissed_comment;
    }
}
