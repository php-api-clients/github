<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class AutoMerge
{
    public const SCHEMA_TITLE       = 'Auto merge';
    public const SCHEMA_DESCRIPTION = 'The status of auto merging a pull request.';
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\SimpleUser::class)
     */
    private ?SimpleUser $enabled_by = null;
    /**
     * The merge method to use.
     */
    private ?string $merge_method = null;
    /**
     * Title for the merge commit message.
     */
    private ?string $commit_title = null;
    /**
     * Commit message for the merge commit.
     */
    private ?string $commit_message = null;

    public function enabled_by(): ?SimpleUser
    {
        return $this->enabled_by;
    }

    public function merge_method(): ?string
    {
        return $this->merge_method;
    }

    public function commit_title(): ?string
    {
        return $this->commit_title;
    }

    public function commit_message(): ?string
    {
        return $this->commit_message;
    }
}
