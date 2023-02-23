<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Gists\CreateComment\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["body"],"type":"object","properties":{"body":{"maxLength":65535,"type":"string","description":"The comment text.","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The comment text.
     */
    public ?string $body;
    public function __construct(string $body)
    {
        $this->body = $body;
    }
}
