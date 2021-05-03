<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class HookResponse
{
    public const SCHEMA_TITLE = 'Hook Response';
    public const SPL_HASH = '000000006312ff8e0000000044ad25fc';
    public const SCHEMA_DESCRIPTION = '';
    private int $code;
    private string $status;
    private string $message;
    public function code() : int
    {
        return $this->code;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function message() : string
    {
        return $this->message;
    }
}
