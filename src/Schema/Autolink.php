<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Autolink
{
    public const SCHEMA_JSON = '{"title":"Autolink reference","required":["id","key_prefix","url_template","is_alphanumeric"],"type":"object","properties":{"id":{"type":"integer","examples":[3]},"key_prefix":{"type":"string","description":"The prefix of a key that is linkified.","examples":["TICKET-"]},"url_template":{"type":"string","description":"A template for the target URL that is generated if a key was found.","examples":["https:\\/\\/example.com\\/TICKET?query=<num>"]},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.","examples":[true]}},"description":"An autolink reference."}';
    public const SCHEMA_TITLE = 'Autolink reference';
    public const SCHEMA_DESCRIPTION = 'An autolink reference.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":3,"keyPrefix":"TICKET-","urlTemplate":"https:\\/\\/example.com\\/TICKET?query=<num>","isAlphanumeric":true}';
    /**
     * keyPrefix: The prefix of a key that is linkified.
     * urlTemplate: A template for the target URL that is generated if a key was found.
     * isAlphanumeric: Whether this autolink reference matches alphanumeric characters. If false, this autolink reference only matches numeric characters.
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('key_prefix')] public string $keyPrefix, #[\EventSauce\ObjectHydrator\MapFrom('url_template')] public string $urlTemplate, #[\EventSauce\ObjectHydrator\MapFrom('is_alphanumeric')] public bool $isAlphanumeric)
    {
    }
}
