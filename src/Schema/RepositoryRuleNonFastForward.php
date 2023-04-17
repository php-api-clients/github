<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleNonFastForward
{
    public const SCHEMA_JSON         = '{"title":"non_fast_forward","required":["type"],"type":"object","properties":{"type":{"enum":["non_fast_forward"],"type":"string"}},"description":"Parameters to be used for the non_fast_forward rule"}';
    public const SCHEMA_TITLE        = 'non_fast_forward';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the non_fast_forward rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"non_fast_forward"}';

    public function __construct(public string $type)
    {
    }
}
