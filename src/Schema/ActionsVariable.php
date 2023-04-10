<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsVariable
{
    public const SCHEMA_JSON = '{"title":"Actions Variable","required":["name","value","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable.","examples":["USERNAME"]},"value":{"type":"string","description":"The value of the variable.","examples":["octocat"]},"created_at":{"type":"string","description":"The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"updated_at":{"type":"string","description":"The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]}}}';
    public const SCHEMA_TITLE = 'Actions Variable';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"USERNAME","value":"octocat","created_at":"2019-01-24T22:45:36.000Z","updated_at":"2019-01-24T22:45:36.000Z"}';
    /**
     * name: The name of the variable.
     * value: The value of the variable.
     * createdAt: The date and time at which the variable was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     * updatedAt: The date and time at which the variable was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function __construct(public string $name, public string $value, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt)
    {
    }
}
