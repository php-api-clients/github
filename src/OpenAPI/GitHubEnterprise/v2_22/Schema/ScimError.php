<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ScimError
{
    public const SCHEMA_TITLE = 'Scim Error';
    public const SPL_HASH = '0000000031ee502500000000484d7fbe';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    private string $message;
    private string $documentation_url;
    private string $detail;
    private int $status;
    private string $scimType;
    private array $schemas;
    public function message() : string
    {
        return $this->message;
    }
    public function documentation_url() : string
    {
        return $this->documentation_url;
    }
    public function detail() : string
    {
        return $this->detail;
    }
    public function status() : int
    {
        return $this->status;
    }
    public function scimType() : string
    {
        return $this->scimType;
    }
    public function schemas() : array
    {
        return $this->schemas;
    }
}
