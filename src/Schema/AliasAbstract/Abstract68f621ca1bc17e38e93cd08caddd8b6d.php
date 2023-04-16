<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract68f621ca1bc17e38e93cd08caddd8b6d
{
    public const SCHEMA_JSON = '{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description_null","full_description":"generated_full_description_null","help":"generated_help_null","help_uri":"generated_help_uri_null","id":"generated_id_null","name":"generated_name_null","severity":"none","tags":["generated_tags_null"]}';
    /**
     * description: A short description of the rule used to detect the alert.
     * helpUri: A link to the documentation for the rule used to detect the alert.
     * id: A unique identifier for the rule used to detect the alert.
     * severity: The severity of the alert.
     * @param ?array<string> $tags
     */
    public function __construct(public string $description, #[\EventSauce\ObjectHydrator\MapFrom('full_description')] public ?string $fullDescription, public ?string $help, #[\EventSauce\ObjectHydrator\MapFrom('help_uri')] public ?string $helpUri, public string $id, public ?string $name, public ?string $severity, public ?array $tags)
    {
    }
}
