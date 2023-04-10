<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\CreateOrUpdateFileContents\Request\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Committer
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-05T13:13:22+05:00\\""]}},"description":"The person that committed the file. Default: the authenticated user."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The person that committed the file. Default: the authenticated user.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","email":"generated_email_null","date":"\\"2013-01-05T13:13:22+05:00\\""}';
    /**
     * name: The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     * email: The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     */
    public function __construct(public string $name, public string $email, public ?string $date)
    {
    }
}
