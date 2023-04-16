<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\Applicationjson;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class Author
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-15T17:13:22+05:00\\""]}},"description":"The author of the file. Default: The `committer` or the authenticated user if you omit `committer`."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The author of the file. Default: The `committer` or the authenticated user if you omit `committer`.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","email":"generated_email_null","date":"\\"2013-01-15T17:13:22+05:00\\""}';
    /**
     * name: The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     * email: The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     */
    public function __construct(public string $name, public string $email, public ?string $date)
    {
    }
}
