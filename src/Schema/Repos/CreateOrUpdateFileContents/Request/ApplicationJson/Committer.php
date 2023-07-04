<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateFileContents\Request\ApplicationJson;

final readonly class Committer
{
    public const SCHEMA_JSON         = '{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author or committer of the commit. You\'ll receive a `422` status code if `name` is omitted."},"email":{"type":"string","description":"The email of the author or committer of the commit. You\'ll receive a `422` status code if `email` is omitted."},"date":{"type":"string","examples":["\\"2013-01-05T13:13:22+05:00\\""]}},"description":"The person that committed the file. Default: the authenticated user."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The person that committed the file. Default: the authenticated user.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated","email":"generated","date":"\\"2013-01-05T13:13:22+05:00\\""}';

    /**
     * name: The name of the author or committer of the commit. You'll receive a `422` status code if `name` is omitted.
     * email: The email of the author or committer of the commit. You'll receive a `422` status code if `email` is omitted.
     */
    public function __construct(public string $name, public string $email, public string|null $date)
    {
    }
}
