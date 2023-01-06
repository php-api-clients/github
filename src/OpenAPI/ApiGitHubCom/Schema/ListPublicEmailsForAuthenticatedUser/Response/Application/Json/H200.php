<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListPublicEmailsForAuthenticatedUser\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Email","required":["email","primary","verified","visibility"],"type":"object","properties":{"email":{"type":"string","format":"email","examples":["octocat@github.com"]},"primary":{"type":"boolean","examples":[true]},"verified":{"type":"boolean","examples":[true]},"visibility":{"type":["string","null"],"examples":["public"]}},"description":"Email"}}';
    public const SCHEMA_TITLE = 'ListPublicEmailsForAuthenticatedUser\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
