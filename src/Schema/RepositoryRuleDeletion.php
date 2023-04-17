<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleDeletion
{
    public const SCHEMA_JSON         = '{"title":"deletion","required":["type"],"type":"object","properties":{"type":{"enum":["deletion"],"type":"string"}},"description":"Parameters to be used for the deletion rule"}';
    public const SCHEMA_TITLE        = 'deletion';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the deletion rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"deletion"}';

    public function __construct(public string $type)
    {
    }
}
