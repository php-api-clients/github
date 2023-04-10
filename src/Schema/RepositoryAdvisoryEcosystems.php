<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class RepositoryAdvisoryEcosystems
{
    public const SCHEMA_JSON = '{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The package\'s language or package management ecosystem.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
