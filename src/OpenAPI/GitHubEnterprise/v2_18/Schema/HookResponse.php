<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class HookResponse
{
    public const SCHEMA_TITLE = 'Hook Response';
    public const SPL_HASH = '000000002eab60cf00000000697c5254';
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
