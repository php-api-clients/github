<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListPublicSshKeysForAuthenticatedUser\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Key","required":["key","id","url","title","created_at","verified","read_only"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"url":{"type":"string"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"},"verified":{"type":"boolean"},"read_only":{"type":"boolean"}},"description":"Key"}}';
    public const SCHEMA_TITLE = 'ListPublicSshKeysForAuthenticatedUser\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
