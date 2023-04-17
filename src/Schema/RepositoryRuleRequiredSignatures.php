<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleRequiredSignatures
{
    public const SCHEMA_JSON         = '{"title":"required_signatures","required":["type"],"type":"object","properties":{"type":{"enum":["required_signatures"],"type":"string"}},"description":"Parameters to be used for the required_signatures rule"}';
    public const SCHEMA_TITLE        = 'required_signatures';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the required_signatures rule';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"required_signatures"}';

    public function __construct(public string $type)
    {
    }
}
