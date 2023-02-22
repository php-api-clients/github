<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class RunnerApplication
{
    public const SCHEMA_JSON = '{"title":"Runner Application","required":["os","architecture","download_url","filename"],"type":"object","properties":{"os":{"type":"string"},"architecture":{"type":"string"},"download_url":{"type":"string"},"filename":{"type":"string"},"temp_download_token":{"type":"string","description":"A short lived bearer token used to download the runner, if needed."},"sha256_checksum":{"type":"string"}},"description":"Runner Application"}';
    public const SCHEMA_TITLE = 'Runner Application';
    public const SCHEMA_DESCRIPTION = 'Runner Application';
    public ?string $os;
    public ?string $architecture;
    public ?string $download_url;
    public ?string $filename;
    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    public string $temp_download_token;
    public string $sha256_checksum;
    public function __construct(string $os, string $architecture, string $download_url, string $filename, string $temp_download_token, string $sha256_checksum)
    {
        $this->os = $os;
        $this->architecture = $architecture;
        $this->download_url = $download_url;
        $this->filename = $filename;
        $this->temp_download_token = $temp_download_token;
        $this->sha256_checksum = $sha256_checksum;
    }
}
