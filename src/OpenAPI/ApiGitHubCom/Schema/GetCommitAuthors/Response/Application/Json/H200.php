<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GetCommitAuthors\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Porter Author","required":["id","remote_id","remote_name","email","name","url","import_url"],"type":"object","properties":{"id":{"type":"integer"},"remote_id":{"type":"string"},"remote_name":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"},"url":{"type":"string","format":"uri"},"import_url":{"type":"string","format":"uri"}},"description":"Porter Author"}}';
    public const SCHEMA_TITLE = 'GetCommitAuthors\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
