<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Git\CreateBlob\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["content"],"type":"object","properties":{"content":{"type":"string","description":"The new blob\'s content."},"encoding":{"type":"string","description":"The encoding used for `content`. Currently, `\\"utf-8\\"` and `\\"base64\\"` are supported.","default":"utf-8"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"generated_content_null","encoding":"generated_encoding_null"}';
    /**
     * content: The new blob's content.
     * encoding: The encoding used for `content`. Currently, `"utf-8"` and `"base64"` are supported.
     */
    public function __construct(public string $content, public ?string $encoding)
    {
    }
}
