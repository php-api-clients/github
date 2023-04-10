<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Orgs\ReviewPatGrantRequest\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
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
