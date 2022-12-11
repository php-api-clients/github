<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class HookResponse
{
    public const SCHEMA_TITLE = 'Hook Response';
    public const SCHEMA_DESCRIPTION = '';
    private $code;
    private $status;
    private $message;
    public function code()
    {
        return $this->code;
    }
    public function status()
    {
        return $this->status;
    }
    public function message()
    {
        return $this->message;
    }
}
