<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Git\CreateTag\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["tag","message","object","type"],"type":"object","properties":{"tag":{"type":"string","description":"The tag\'s name. This is typically a version (e.g., \\"v0.0.1\\")."},"message":{"type":"string","description":"The tag message."},"object":{"type":"string","description":"The SHA of the git object this is tagging."},"type":{"enum":["commit","tree","blob"],"type":"string","description":"The type of the object we\'re tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`."},"tagger":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author of the tag"},"email":{"type":"string","description":"The email of the author of the tag"},"date":{"type":"string","description":"When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"An object with information about the individual creating the tag."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The tag's name. This is typically a version (e.g., "v0.0.1").
     */
    public ?string $tag;
    /**
     * The tag message.
     */
    public ?string $message;
    /**
     * The SHA of the git object this is tagging.
     */
    public ?string $object;
    /**
     * The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     */
    public ?string $type;
    /**
     * An object with information about the individual creating the tag.
     */
    public \ApiClients\Client\Github\Schema\Git\CreateTag\Request\Applicationjson\Tagger $tagger;
    public function __construct(string $tag, string $message, string $object, string $type, \ApiClients\Client\Github\Schema\Git\CreateTag\Request\Applicationjson\Tagger $tagger)
    {
        $this->tag = $tag;
        $this->message = $message;
        $this->object = $object;
        $this->type = $type;
        $this->tagger = $tagger;
    }
}
