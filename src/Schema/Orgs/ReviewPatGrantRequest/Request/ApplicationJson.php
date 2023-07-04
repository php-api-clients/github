<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Orgs\ReviewPatGrantRequest\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["action"],"type":"object","properties":{"action":{"enum":["approve","deny"],"type":"string","description":"Action to apply to the request."},"reason":{"maxLength":1024,"type":["string","null"],"description":"Reason for approving or denying the request. Max 1024 characters."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"deny","reason":"generated"}';

    /**
     * action: Action to apply to the request.
     * reason: Reason for approving or denying the request. Max 1024 characters.
     */
    public function __construct(public string $action, public string|null $reason)
    {
    }
}
