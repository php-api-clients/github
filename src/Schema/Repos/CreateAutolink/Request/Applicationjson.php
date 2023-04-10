<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateAutolink\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key_prefix","url_template"],"type":"object","properties":{"key_prefix":{"type":"string","description":"This prefix appended by certain characters will generate a link any time it is found in an issue, pull request, or commit."},"url_template":{"type":"string","description":"The URL must contain `<num>` for the reference number. `<num>` matches different characters depending on the value of `is_alphanumeric`."},"is_alphanumeric":{"type":"boolean","description":"Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key_prefix":"generated_key_prefix_null","url_template":"generated_url_template_null","is_alphanumeric":false}';
    /**
     * keyPrefix: This prefix appended by certain characters will generate a link any time it is found in an issue, pull request, or commit.
     * urlTemplate: The URL must contain `<num>` for the reference number. `<num>` matches different characters depending on the value of `is_alphanumeric`.
     * isAlphanumeric: Whether this autolink reference matches alphanumeric characters. If true, the `<num>` parameter of the `url_template` matches alphanumeric characters `A-Z` (case insensitive), `0-9`, and `-`. If false, this autolink reference only matches numeric characters.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('key_prefix')] public string $keyPrefix, #[\EventSauce\ObjectHydrator\MapFrom('url_template')] public string $urlTemplate, #[\EventSauce\ObjectHydrator\MapFrom('is_alphanumeric')] public ?bool $isAlphanumeric)
    {
    }
}
