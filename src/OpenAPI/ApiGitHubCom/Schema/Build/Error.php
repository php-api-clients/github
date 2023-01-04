<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build;

final class Error
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Build\\Error';
    public const SCHEMA_DESCRIPTION = '';
    private $message;
    public function message()
    {
        return $this->message;
    }
}
