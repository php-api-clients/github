<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\SimpleCommit;

final readonly class Author
{
    public const SCHEMA_JSON         = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string","description":"Name of the commit\'s author","examples":["Monalisa Octocat"]},"email":{"type":"string","description":"Git email address of the commit\'s author","format":"email","examples":["monalisa.octocat@example.com"]}},"description":"Information about the Git author"}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Information about the Git author';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"Monalisa Octocat","email":"monalisa.octocat@example.com"}';

    /**
     * name: Name of the commit's author
     * email: Git email address of the commit's author
     */
    public function __construct(public string $name, public string $email)
    {
    }
}
