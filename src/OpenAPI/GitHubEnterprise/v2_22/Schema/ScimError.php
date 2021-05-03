<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ScimError
{
    public const SCHEMA_TITLE = 'Scim Error';
    public const SPL_HASH = '00000000269f22ef00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    private ?string $message = null;
    private ?string $documentation_url = null;
    private ?string $detail = null;
    private ?int $status = null;
    private ?string $scimType = null;
    private array $schemas = array();
    public function message() : ?string
    {
        return $this->message;
    }
    public function documentation_url() : ?string
    {
        return $this->documentation_url;
    }
    public function detail() : ?string
    {
        return $this->detail;
    }
    public function status() : ?int
    {
        return $this->status;
    }
    public function scimType() : ?string
    {
        return $this->scimType;
    }
    public function schemas() : array
    {
        return $this->schemas;
    }
}
