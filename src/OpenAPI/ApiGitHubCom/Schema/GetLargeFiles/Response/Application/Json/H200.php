<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GetLargeFiles\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Porter Large File","required":["oid","path","ref_name","size"],"type":"object","properties":{"ref_name":{"type":"string"},"path":{"type":"string"},"oid":{"type":"string"},"size":{"type":"integer"}},"description":"Porter Large File"}}';
    public const SCHEMA_TITLE = 'GetLargeFiles\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
