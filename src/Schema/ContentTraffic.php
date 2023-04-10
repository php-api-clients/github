<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class ContentTraffic
{
    public const SCHEMA_JSON = '{"title":"Content Traffic","required":["path","title","uniques","count"],"type":"object","properties":{"path":{"type":"string","examples":["\\/github\\/hubot"]},"title":{"type":"string","examples":["github\\/hubot: A customizable life embetterment robot."]},"count":{"type":"integer","examples":[3542]},"uniques":{"type":"integer","examples":[2225]}},"description":"Content Traffic"}';
    public const SCHEMA_TITLE = 'Content Traffic';
    public const SCHEMA_DESCRIPTION = 'Content Traffic';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"\\/github\\/hubot","title":"github\\/hubot: A customizable life embetterment robot.","count":3542,"uniques":2225}';
    public function __construct(public string $path, public string $title, public int $count, public int $uniques)
    {
    }
}
