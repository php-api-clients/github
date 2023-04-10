<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CodeScanningDefaultSetup
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"state":{"enum":["configured","not-configured"],"type":"string","description":"Code scanning default setup has been configured or not."},"languages":{"type":"array","items":{"enum":["javascript","python","ruby"],"type":"string"},"description":"Languages to be analysed."},"query_suite":{"enum":["default","extended"],"type":"string","description":"CodeQL query suite to be used."},"updated_at":{"type":["string","null"],"description":"Timestamp of latest configuration update.","format":"date-time","examples":["2023-12-06T14:20:20.000Z"]}},"description":"Configuration for code scanning default setup."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Configuration for code scanning default setup.';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"configured","languages":["generated_languages_null"],"query_suite":"default","updated_at":"2023-12-06T14:20:20.000Z"}';
    /**
     * state: Code scanning default setup has been configured or not.
     * languages: Languages to be analysed.
     * @param ?array<string> $languages
     * querySuite: CodeQL query suite to be used.
     * updatedAt: Timestamp of latest configuration update.
     */
    public function __construct(public ?string $state, public ?array $languages, #[\EventSauce\ObjectHydrator\MapFrom('query_suite')] public ?string $querySuite, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public ?string $updatedAt)
    {
    }
}
