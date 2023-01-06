<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Users\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"SSH Signing Key","required":["key","id","title","created_at"],"type":"object","properties":{"key":{"type":"string"},"id":{"type":"integer"},"title":{"type":"string"},"created_at":{"type":"string","format":"date-time"}},"description":"A public SSH key used to sign Git commits"}}';
    public const SCHEMA_TITLE = 'Users\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
