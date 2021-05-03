<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class RunnerApplication
{
    public const SCHEMA_TITLE = 'Runner Application';
    public const SPL_HASH = '000000001f1e28be000000004be6709d';
    public const SCHEMA_DESCRIPTION = 'Runner Application';
    private string $os;
    private string $architecture;
    private string $download_url;
    private string $filename;
    /**
     * A short lived bearer token used to download the runner, if needed.
     */
    private string $temp_download_token;
    private string $sha256_checksum;
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
    public function temp_download_token() : string
    {
        return $this->temp_download_token;
    }
    public function sha256_checksum() : string
    {
        return $this->sha256_checksum;
    }
}
