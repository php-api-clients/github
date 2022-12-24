<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GitTag
{
    public const SCHEMA_JSON = '{"title":"Git Tag","required":["sha","url","node_id","tagger","object","tag","message"],"type":"object","properties":{"node_id":{"type":"string","examples":["MDM6VGFnOTQwYmQzMzYyNDhlZmFlMGY5ZWU1YmM3YjJkNWM5ODU4ODdiMTZhYw=="]},"tag":{"type":"string","description":"Name of the tag","examples":["v0.0.1"]},"sha":{"type":"string","examples":["940bd336248efae0f9ee5bc7b2d5c985887b16ac"]},"url":{"type":"string","description":"URL for the tag","format":"uri","examples":["https:\\/\\/api.github.com\\/repositories\\/42\\/git\\/tags\\/940bd336248efae0f9ee5bc7b2d5c985887b16ac"]},"message":{"type":"string","description":"Message describing the purpose of the tag","examples":["Initial public release"]},"tagger":{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}},"object":{"required":["sha","type","url"],"type":"object","properties":{"sha":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}},"verification":{"title":"Verification","required":["verified","reason","payload","signature"],"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"payload":{"type":["string","null"]},"signature":{"type":["string","null"]}}}},"description":"Metadata for a Git tag"}';
    public const SCHEMA_TITLE = 'Git Tag';
    public const SCHEMA_DESCRIPTION = 'Metadata for a Git tag';
    private string $node_id;
    /**
     * Name of the tag
     */
    private string $tag;
    private string $sha;
    /**
     * URL for the tag
     */
    private string $url;
    /**
     * Message describing the purpose of the tag
     */
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7693C96457F53641C1E4F2Fa226Fcecf::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7693C96457F53641C1E4F2Fa226Fcecf $tagger;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C25C3010718A41B7B34Fb1583D304C69D::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C25C3010718A41B7B34Fb1583D304C69D $object;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification $verification = null;
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Name of the tag
     */
    public function tag() : string
    {
        return $this->tag;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    /**
     * URL for the tag
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Message describing the purpose of the tag
     */
    public function message() : string
    {
        return $this->message;
    }
    public function tagger() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C7693C96457F53641C1E4F2Fa226Fcecf
    {
        return $this->tagger;
    }
    public function object() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C25C3010718A41B7B34Fb1583D304C69D
    {
        return $this->object;
    }
    public function verification() : ?\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Verification
    {
        return $this->verification;
    }
}
