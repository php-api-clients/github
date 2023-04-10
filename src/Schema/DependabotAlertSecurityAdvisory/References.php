<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class References
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'A link to additional advisory information.';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/example.com\\/"}';
    /**
     * url: The URL of the reference.
     */
    public function __construct(public string $url)
    {
    }
}
