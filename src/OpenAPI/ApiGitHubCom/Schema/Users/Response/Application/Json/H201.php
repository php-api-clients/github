<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Users\Response\Application\Json;

final class H201
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Email","required":["email","primary","verified","visibility"],"type":"object","properties":{"email":{"type":"string","format":"email","examples":["octocat@github.com"]},"primary":{"type":"boolean","examples":[true]},"verified":{"type":"boolean","examples":[true]},"visibility":{"type":["string","null"],"examples":["public"]}},"description":"Email"}}';
    public const SCHEMA_TITLE = 'Users\\Response\\Application\\Json\\H201';
    public const SCHEMA_DESCRIPTION = '';
}
