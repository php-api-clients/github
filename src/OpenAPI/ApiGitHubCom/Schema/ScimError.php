<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ScimError
{
    public const SCHEMA_TITLE = 'Scim Error';
    public const SCHEMA_DESCRIPTION = 'Scim Error';
    private $message;
    private $documentation_url;
    private $detail;
    private int $status;
    private $scimType;
    private array $schemas = array();
    public function message()
    {
        return $this->message;
    }
    public function documentation_url()
    {
        return $this->documentation_url;
    }
    public function detail()
    {
        return $this->detail;
    }
    public function status() : int
    {
        return $this->status;
    }
    public function scimType()
    {
        return $this->scimType;
    }
    public function schemas() : array
    {
        return $this->schemas;
    }
}
