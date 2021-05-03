<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class HookResponse
{
    public const SCHEMA_TITLE = 'Hook Response';
    public const SPL_HASH = '0000000054d5e1b50000000071115dec';
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
