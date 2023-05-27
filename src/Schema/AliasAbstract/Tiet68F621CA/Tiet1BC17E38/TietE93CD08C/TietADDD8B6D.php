<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet68F621CA\Tiet1BC17E38\TietE93CD08C;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietADDD8B6D
{
    public const SCHEMA_JSON         = '{"required":["id","severity","description"],"type":"object","properties":{"description":{"type":"string","description":"A short description of the rule used to detect the alert."},"full_description":{"type":"string"},"help":{"type":["string","null"]},"help_uri":{"type":["string","null"],"description":"A link to the documentation for the rule used to detect the alert."},"id":{"type":"string","description":"A unique identifier for the rule used to detect the alert."},"name":{"type":"string"},"severity":{"enum":["none","note","warning","error",null],"type":["string","null"],"description":"The severity of the alert."},"tags":{"type":["array","null"],"items":{"type":"string"}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated","full_description":"generated","help":"generated","help_uri":"generated","id":"generated","name":"generated","severity":"error","tags":null}';

    /**
     * description: A short description of the rule used to detect the alert.
     * helpUri: A link to the documentation for the rule used to detect the alert.
     * id: A unique identifier for the rule used to detect the alert.
     * severity: The severity of the alert.
     */
    public function __construct(public string $description, #[MapFrom('full_description')] public ?string $fullDescription, public ?string $help, #[MapFrom('help_uri')] public ?string $helpUri, public string $id, public ?string $name, public ?string $severity, public ?array $tags)
    {
    }
}
