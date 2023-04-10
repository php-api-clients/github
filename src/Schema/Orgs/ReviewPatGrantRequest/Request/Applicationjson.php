<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Orgs\ReviewPatGrantRequest\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["action"],"type":"object","properties":{"action":{"enum":["approve","deny"],"type":"string","description":"Action to apply to the request."},"reason":{"maxLength":1024,"type":["string","null"],"description":"Reason for approving or denying the request. Max 1024 characters."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"action":"approve","reason":"generated_reason_null"}';
    /**
     * action: Action to apply to the request.
     * reason: Reason for approving or denying the request. Max 1024 characters.
     */
    public function __construct(public string $action, public ?string $reason)
    {
    }
}
