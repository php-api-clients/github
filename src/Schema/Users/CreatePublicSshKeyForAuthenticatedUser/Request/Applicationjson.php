<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Users\CreatePublicSshKeyForAuthenticatedUser\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["key"],"type":"object","properties":{"title":{"type":"string","description":"A descriptive name for the new key.","examples":["Personal MacBook Air"]},"key":{"pattern":"^ssh-(rsa|dss|ed25519) |^ecdsa-sha2-nistp(256|384|521) ","type":"string","description":"The public SSH key to add to your GitHub account."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"Personal MacBook Air","key":"generated_key"}';
    /**
     * title: A descriptive name for the new key.
     * key: The public SSH key to add to your GitHub account.
     */
    public function __construct(public ?string $title, public string $key)
    {
    }
}
