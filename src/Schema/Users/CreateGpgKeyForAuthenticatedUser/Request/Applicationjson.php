<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Users\CreateGpgKeyForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["armored_public_key"],"type":"object","properties":{"name":{"type":"string","description":"A descriptive name for the new key."},"armored_public_key":{"type":"string","description":"A GPG key in ASCII-armored format."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","armored_public_key":"generated_armored_public_key"}';
    /**
     * name: A descriptive name for the new key.
     * armored_public_key: A GPG key in ASCII-armored format.
     */
    public function __construct(public string $name, public ?string $armored_public_key)
    {
    }
}
