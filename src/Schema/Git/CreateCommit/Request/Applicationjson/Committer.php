<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Git\CreateCommit\Request\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Committer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"},"date":{"type":"string","description":"Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Information about the person who is making the commit. By default, `committer` will use the information set in `author`. See the `author` and `committer` object below for details.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name","email":"generated_email","date":"generated_date"}';
    /**
     * name: The name of the author (or committer) of the commit
     * email: The email of the author (or committer) of the commit
     * date: Indicates when this commit was authored (or committed). This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(public ?string $name, public ?string $email, public ?string $date)
    {
    }
}
