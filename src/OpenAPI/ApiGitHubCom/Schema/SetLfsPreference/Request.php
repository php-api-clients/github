<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetLfsPreference;

final class Request
{
    public const SCHEMA_JSON = '{"required":["use_lfs"],"type":"object","properties":{"use_lfs":{"enum":["opt_in","opt_out"],"type":"string","description":"Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import."}}}';
    public const SCHEMA_TITLE = 'SetLfsPreference\\Request';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import.
     */
    private string $use_lfs;
    /**
     * Whether to store large files during the import. `opt_in` means large files will be stored using Git LFS. `opt_out` means large files will be removed during the import.
     */
    public function use_lfs() : string
    {
        return $this->use_lfs;
    }
}
