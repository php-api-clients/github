<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class HookResponse
{
    public const SCHEMA_TITLE = 'Hook Response';
    public const SPL_HASH = '000000000c92e11e000000006ad867a6';
    public const SCHEMA_DESCRIPTION = '';
    private ?int $code = null;
    private ?string $status = null;
    private ?string $message = null;
    public function code() : ?int
    {
        return $this->code;
    }
    public function status() : ?string
    {
        return $this->status;
    }
    public function message() : ?string
    {
        return $this->message;
    }
}
