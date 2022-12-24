<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C0Fee6F08754901829Fd89400Eb08B63F
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":"string","description":"The message for the pull request review dismissal"},"event":{"type":"string","examples":["\\"APPROVE\\""]}}}';
    public const SCHEMA_TITLE = 'c_0fee6f08754901829fd89400eb08b63f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The message for the pull request review dismissal
     */
    private string $message;
    private ?string $event = null;
    /**
     * The message for the pull request review dismissal
     */
    public function message() : string
    {
        return $this->message;
    }
    public function event() : ?string
    {
        return $this->event;
    }
}
