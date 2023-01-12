<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CreateTag\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"required":["tag","message","object","type"],"type":"object","properties":{"tag":{"type":"string","description":"The tag\'s name. This is typically a version (e.g., \\"v0.0.1\\")."},"message":{"type":"string","description":"The tag message."},"object":{"type":"string","description":"The SHA of the git object this is tagging."},"type":{"enum":["commit","tree","blob"],"type":"string","description":"The type of the object we\'re tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`."},"tagger":{"required":["name","email"],"type":"object","properties":{"name":{"type":"string","description":"The name of the author of the tag"},"email":{"type":"string","description":"The email of the author of the tag"},"date":{"type":"string","description":"When this object was tagged. This is a timestamp in [ISO 8601](https:\\/\\/en.wikipedia.org\\/wiki\\/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time"}},"description":"An object with information about the individual creating the tag."}}}';
    public const SCHEMA_TITLE = 'CreateTag\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The tag's name. This is typically a version (e.g., "v0.0.1").
     */
    private string $tag;
    /**
     * The tag message.
     */
    private string $message;
    /**
     * The SHA of the git object this is tagging.
     */
    private string $object;
    /**
     * The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     */
    private string $type;
    /**
     * An object with information about the individual creating the tag.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Tagger::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Tagger $tagger = null;
    /**
     * The tag's name. This is typically a version (e.g., "v0.0.1").
     */
    public function tag() : string
    {
        return $this->tag;
    }
    /**
     * The tag message.
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * The SHA of the git object this is tagging.
     */
    public function object() : string
    {
        return $this->object;
    }
    /**
     * The type of the object we're tagging. Normally this is a `commit` but it can also be a `tree` or a `blob`.
     */
    public function type() : string
    {
        return $this->type;
    }
    /**
     * An object with information about the individual creating the tag.
     */
    public function tagger() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Tagger
    {
        return $this->tagger;
    }
}
