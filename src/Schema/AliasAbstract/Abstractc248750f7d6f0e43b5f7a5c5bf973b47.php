<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstractc248750f7d6f0e43b5f7a5c5bf973b47
{
    public const SCHEMA_JSON = '{"required":["total_count","variables"],"type":"object","properties":{"total_count":{"type":"integer"},"variables":{"type":"array","items":{"title":"Actions Variable","required":["name","value","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the variable.","examples":["USERNAME"]},"value":{"type":"string","description":"The value of the variable.","examples":["octocat"]},"created_at":{"type":"string","description":"The date and time at which the variable was created, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]},"updated_at":{"type":"string","description":"The date and time at which the variable was last updated, in ISO 8601 format\':\' YYYY-MM-DDTHH:MM:SSZ.","format":"date-time","examples":["2019-01-24T22:45:36.000Z"]}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_count":13,"variables":[{"name":"USERNAME","value":"octocat","created_at":"2019-01-24T22:45:36.000Z","updated_at":"2019-01-24T22:45:36.000Z"}]}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\ActionsVariable> $variables
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_count')] public int $totalCount, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\ActionsVariable::class)] public array $variables)
    {
    }
}
