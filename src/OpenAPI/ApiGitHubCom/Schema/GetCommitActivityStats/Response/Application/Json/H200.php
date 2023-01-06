<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GetCommitActivityStats\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Commit Activity","required":["days","total","week"],"type":"object","properties":{"days":{"type":"array","items":{"type":"integer"},"examples":[0,3,26,20,39,1,0]},"total":{"type":"integer","examples":[89]},"week":{"type":"integer","examples":[1336280400]}},"description":"Commit Activity"}}';
    public const SCHEMA_TITLE = 'GetCommitActivityStats\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
