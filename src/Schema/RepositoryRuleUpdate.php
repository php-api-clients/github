<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleUpdate
{
    public const SCHEMA_JSON         = '{"title":"update","required":["type"],"type":"object","properties":{"type":{"enum":["update"],"type":"string"},"parameters":{"required":["update_allows_fetch_and_merge"],"type":"object","properties":{"update_allows_fetch_and_merge":{"type":"boolean","description":"Branch can pull changes from its upstream repository"}}}},"description":"Parameters to be used for the update rule"}';
    public const SCHEMA_TITLE        = 'update';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the update rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"update","parameters":{"update_allows_fetch_and_merge":false}}';

    public function __construct(public string $type, public ?Schema\RepositoryRuleUpdate\Parameters $parameters)
    {
    }
}
