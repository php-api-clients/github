<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GetTopPaths\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Content Traffic","required":["path","title","uniques","count"],"type":"object","properties":{"path":{"type":"string","examples":["\\/github\\/hubot"]},"title":{"type":"string","examples":["github\\/hubot: A customizable life embetterment robot."]},"count":{"type":"integer","examples":[3542]},"uniques":{"type":"integer","examples":[2225]}},"description":"Content Traffic"}}';
    public const SCHEMA_TITLE = 'GetTopPaths\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
