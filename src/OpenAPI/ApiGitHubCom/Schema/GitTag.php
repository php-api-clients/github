<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag\Object_;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GitTag\Tagger;

final readonly class GitTag
{
    public const SCHEMA_JSON        = '{"title":"Git Tag","required":["sha","url","node_id","tagger","object","tag","message"],"type":"object","properties":{"node_id":{"type":"string","examples":["MDM6VGFnOTQwYmQzMzYyNDhlZmFlMGY5ZWU1YmM3YjJkNWM5ODU4ODdiMTZhYw=="]},"tag":{"type":"string","description":"Name of the tag","examples":["v0.0.1"]},"sha":{"type":"string","examples":["940bd336248efae0f9ee5bc7b2d5c985887b16ac"]},"url":{"type":"string","description":"URL for the tag","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/git\\/tags\\/940bd336248efae0f9ee5bc7b2d5c985887b16ac"]},"message":{"type":"string","description":"Message describing the purpose of the tag","examples":["Initial public release"]},"tagger":{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}},"object":{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}},"description":"Metadata for a Git tag"}';
    public const SCHEMA_TITLE       = 'Git Tag';
    public const SCHEMA_DESCRIPTION = 'Metadata for a Git tag';
    public ?string $node_id;
    /**
     * Name of the tag
     */
    public ?string $tag;
    public ?string $sha;
    /**
     * URL for the tag
     */
    public ?string $url;
    /**
     * Message describing the purpose of the tag
     */
    public ?string $message;
    public ?Tagger $tagger;
    public ?Object_ $object;
    public Verification $verification;

    public function __construct(string $node_id, string $tag, string $sha, string $url, string $message, Tagger $tagger, Object_ $object, Verification $verification)
    {
        $this->node_id      = $node_id;
        $this->tag          = $tag;
        $this->sha          = $sha;
        $this->url          = $url;
        $this->message      = $message;
        $this->tagger       = $tagger;
        $this->object       = $object;
        $this->verification = $verification;
    }
}
