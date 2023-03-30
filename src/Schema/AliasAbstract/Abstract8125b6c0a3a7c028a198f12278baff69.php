<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstract8125b6c0a3a7c028a198f12278baff69
{
    public const SCHEMA_JSON = '{"required":["email","name","date"],"type":"object","properties":{"date":{"type":"string","description":"Timestamp of the commit","format":"date-time","examples":["2014-08-09T08:02:04+12:00"]},"email":{"type":"string","description":"Git email address of the user","examples":["monalisa.octocat@example.com"]},"name":{"type":"string","description":"Name of the git user","examples":["Monalisa Octocat"]}},"description":"Identifying information for the git-user"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Identifying information for the git-user';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"2014-08-09T08:02:04+12:00","email":"monalisa.octocat@example.com","name":"Monalisa Octocat"}';
    /**
     * date: Timestamp of the commit
     * email: Git email address of the user
     * name: Name of the git user
     */
    public function __construct(public string $date, public string $email, public string $name)
    {
    }
}
