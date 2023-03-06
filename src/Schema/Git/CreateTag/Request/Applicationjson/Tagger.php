<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Git\CreateTag\Request\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Tagger
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author of the tag"},"email":{"type":"string","description":"The email of the author of the tag"},"date":{"type":"string","description":"When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"An object with information about the individual creating the tag."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'An object with information about the individual creating the tag.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","email":"generated_email","date":"generated_date"}';
    /**
     * name: The name of the author of the tag
     * email: The email of the author of the tag
     * date: When this object was tagged. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public ?string $name, public ?string $email, public string $date)
    {
    }
}
