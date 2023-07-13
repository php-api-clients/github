<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleCreation
{
    public const SCHEMA_JSON         = '{"title":"creation","required":["type"],"type":"object","properties":{"type":{"enum":["creation"],"type":"string"}},"description":"Only allow users with bypass permission to create matching refs."}';
    public const SCHEMA_TITLE        = 'creation';
    public const SCHEMA_DESCRIPTION  = 'Only allow users with bypass permission to create matching refs.';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"creation"}';

    public function __construct(public string $type)
    {
    }
}
