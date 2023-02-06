<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UploadReleaseAsset\Request\Application;

final class OctetStream
{
    public const SCHEMA_JSON = '{"type":"string","description":"The raw file data","format":"binary"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'UploadReleaseAsset\\Request\\Application\\OctetStream';
    public const SCHEMA_DESCRIPTION = 'The raw file data';
    public function __construct()
    {
    }
}
