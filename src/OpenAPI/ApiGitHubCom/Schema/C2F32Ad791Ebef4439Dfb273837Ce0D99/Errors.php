<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C2F32Ad791Ebef4439Dfb273837Ce0D99;

final class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"},"resource":{"type":"string"},"field":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'C2F32Ad791Ebef4439Dfb273837Ce0D99\\Errors';
    public const SCHEMA_DESCRIPTION = '';
    private string $code;
    private string $message;
    private string $resource;
    private string $field;
    public function code() : string
    {
        return $this->code;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function resource() : string
    {
        return $this->resource;
    }
    public function field() : string
    {
        return $this->field;
    }
}
