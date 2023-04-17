<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleRequiredLinearHistory
{
    public const SCHEMA_JSON         = '{"title":"required_linear_history","required":["type"],"type":"object","properties":{"type":{"enum":["required_linear_history"],"type":"string"}},"description":"Parameters to be used for the required_linear_history rule"}';
    public const SCHEMA_TITLE        = 'required_linear_history';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the required_linear_history rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"required_linear_history"}';

    public function __construct(public string $type)
    {
    }
}
