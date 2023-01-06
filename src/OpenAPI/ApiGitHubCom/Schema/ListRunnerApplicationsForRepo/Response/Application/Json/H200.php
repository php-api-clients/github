<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListRunnerApplicationsForRepo\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Runner Application","required":["os","architecture","download_url","filename"],"type":"object","properties":{"os":{"type":"string"},"architecture":{"type":"string"},"download_url":{"type":"string"},"filename":{"type":"string"},"temp_download_token":{"type":"string","description":"A short lived bearer token used to download the runner, if needed."},"sha256_checksum":{"type":"string"}},"description":"Runner Application"}}';
    public const SCHEMA_TITLE = 'ListRunnerApplicationsForRepo\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
