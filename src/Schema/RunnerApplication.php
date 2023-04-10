<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class RunnerApplication
{
    public const SCHEMA_JSON = '{"title":"Runner Application","required":["os","architecture","download_url","filename"],"type":"object","properties":{"os":{"type":"string"},"architecture":{"type":"string"},"download_url":{"type":"string"},"filename":{"type":"string"},"temp_download_token":{"type":"string","description":"A short lived bearer token used to download the runner, if needed."},"sha256_checksum":{"type":"string"}},"description":"Runner Application"}';
    public const SCHEMA_TITLE = 'Runner Application';
    public const SCHEMA_DESCRIPTION = 'Runner Application';
    public const SCHEMA_EXAMPLE_DATA = '{"os":"generated_os_null","architecture":"generated_architecture_null","download_url":"generated_download_url_null","filename":"generated_filename_null","temp_download_token":"generated_temp_download_token_null","sha256_checksum":"generated_sha256_checksum_null"}';
    /**
     * tempDownloadToken: A short lived bearer token used to download the runner, if needed.
     */
    public function __construct(public string $os, public string $architecture, #[\EventSauce\ObjectHydrator\MapFrom('download_url')] public string $downloadUrl, public string $filename, #[\EventSauce\ObjectHydrator\MapFrom('temp_download_token')] public ?string $tempDownloadToken, #[\EventSauce\ObjectHydrator\MapFrom('sha256_checksum')] public ?string $sha256Checksum)
    {
    }
}
