<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class RunnerApplication
{
    public const SCHEMA_JSON = '{"title":"Runner Application","required":["os","architecture","download_url","filename"],"type":"object","properties":{"os":{"type":"string"},"architecture":{"type":"string"},"download_url":{"type":"string"},"filename":{"type":"string"},"temp_download_token":{"type":"string","description":"A short lived bearer token used to download the runner, if needed."},"sha256_checksum":{"type":"string"}},"description":"Runner Application"}';
    public const SCHEMA_TITLE = 'Runner Application';
    public const SCHEMA_DESCRIPTION = 'Runner Application';
    private string $os;
    private string $architecture;
    private string $download_url;
    private string $filename;
    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    private ?string $temp_download_token = null;
    private ?string $sha256_checksum = null;
    public function os() : string
    {
        return $this->os;
    }
    public function architecture() : string
    {
        return $this->architecture;
    }
    public function download_url() : string
    {
        return $this->download_url;
    }
    public function filename() : string
    {
        return $this->filename;
    }
    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    public function temp_download_token() : ?string
    {
        return $this->temp_download_token;
    }
    public function sha256_checksum() : ?string
    {
        return $this->sha256_checksum;
    }
}
