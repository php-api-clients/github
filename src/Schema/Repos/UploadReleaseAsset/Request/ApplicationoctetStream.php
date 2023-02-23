<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\UploadReleaseAsset\Request;

final readonly class ApplicationoctetStream
{
    public const SCHEMA_JSON = '{"type":"string","description":"The raw file data","format":"binary"}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The raw file data';
    public function __construct()
    {
    }
}
