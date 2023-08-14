<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningDefaultSetup
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"state":{"enum":["configured","not-configured"],"type":"string","description":"Code scanning default setup has been configured or not."},"languages":{"type":"array","items":{"enum":["c-cpp","csharp","go","java-kotlin","javascript-typescript","javascript","python","ruby","typescript","swift"],"type":"string"},"description":"Languages to be analysed."},"query_suite":{"enum":["default","extended"],"type":"string","description":"CodeQL query suite to be used."},"updated_at":{"type":["string","null"],"description":"Timestamp of latest configuration update.","format":"date-time","examples":["2023-12-06T14:20:20.000Z"]},"schedule":{"enum":["weekly",null],"type":["string","null"],"description":"The frequency of the periodic analysis."}},"description":"Configuration for code scanning default setup."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Configuration for code scanning default setup.';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"configured","languages":["generated","generated"],"query_suite":"default","updated_at":"2023-12-06T14:20:20.000Z","schedule":"weekly"}';

    /**
     * state: Code scanning default setup has been configured or not.
     * languages: Languages to be analysed.
     * querySuite: CodeQL query suite to be used.
     * updatedAt: Timestamp of latest configuration update.
     * schedule: The frequency of the periodic analysis.
     */
    public function __construct(public string|null $state, public array|null $languages, #[MapFrom('query_suite')]
    public string|null $querySuite, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string|null $schedule,)
    {
    }
}
