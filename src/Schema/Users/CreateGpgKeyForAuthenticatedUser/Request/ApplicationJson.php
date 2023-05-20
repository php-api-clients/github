<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Users\CreateGpgKeyForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"required":["armored_public_key"],"type":"object","properties":{"name":{"type":"string","description":"A descriptive name for the new key."},"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","armored_public_key":"generated"}';

    /**
     * name: A descriptive name for the new key.
     * armoredPublicKey: A GPG key in ASCII-armored format.
     */
    public function __construct(public ?string $name, #[MapFrom('armored_public_key')] public string $armoredPublicKey)
    {
    }
}
