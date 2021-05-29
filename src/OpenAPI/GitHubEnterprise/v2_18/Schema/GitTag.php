<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class GitTag
{
    public const SCHEMA_TITLE       = 'Git Tag';
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
    private array $tagger = [];
    private array $object = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Verification::class) */
    private Verification $verification;

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * Name of the tag
     */
    public function tag(): string
    {
        return $this->tag;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * URL for the tag
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * Message describing the purpose of the tag
     */
    public function message(): string
    {
        return $this->message;
    }

    public function tagger(): array
    {
        return $this->tagger;
    }

    public function object(): array
    {
        return $this->object;
    }

    public function verification(): Verification
    {
        return $this->verification;
    }
}
