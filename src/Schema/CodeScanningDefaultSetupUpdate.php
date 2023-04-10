<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningDefaultSetupUpdate
{
    public const SCHEMA_JSON = '{"required":["state"],"type":"object","properties":{"state":{"enum":["configured","not-configured"],"type":"string","description":"Whether code scanning default setup has been configured or not."},"query_suite":{"enum":["default","extended"],"type":"string","description":"CodeQL query suite to be used."}},"description":"Configuration for code scanning default setup."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Configuration for code scanning default setup.';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"configured","query_suite":"default"}';
    /**
     * state: Whether code scanning default setup has been configured or not.
     * querySuite: CodeQL query suite to be used.
     */
    public function __construct(public string $state, #[\EventSauce\ObjectHydrator\MapFrom('query_suite')] public ?string $querySuite)
    {
    }
}
