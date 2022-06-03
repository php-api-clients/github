<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class ContributorActivity
{
    public const SCHEMA_TITLE = 'Contributor Activity';
    public const SCHEMA_DESCRIPTION = 'Contributor Activity';
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser $author = null;
    private int $total;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\ContributorActivity\Weeks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\ContributorActivity\Weeks::class)
     */
    private array $weeks = array();
    /**
     * Simple User
     */
    public function author() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\NullableSimpleUser
    {
        return $this->author;
    }
    public function total() : int
    {
        return $this->total;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\ContributorActivity\Weeks>
     */
    public function weeks() : array
    {
        return $this->weeks;
    }
}
