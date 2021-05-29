<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class GitTag
{
    public const SCHEMA_TITLE       = 'Git Tag';
    public const SCHEMA_DESCRIPTION = 'Metadata for a Git tag';
    private ?string $node_id        = null;
    /**
     * Name of the tag
     */
    private ?string $tag = null;
    private ?string $sha = null;
    /**
     * URL for the tag
     */
    private ?string $url = null;
    /**
     * Message describing the purpose of the tag
     */
    private ?string $message = null;
    private array $tagger    = [];
    private array $object    = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\Verification::class) */
    private ?Verification $verification = null;

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function tag(): ?string
    {
        return $this->tag;
    }

    public function sha(): ?string
    {
        return $this->sha;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function message(): ?string
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

    public function verification(): ?Verification
    {
        return $this->verification;
    }
}
