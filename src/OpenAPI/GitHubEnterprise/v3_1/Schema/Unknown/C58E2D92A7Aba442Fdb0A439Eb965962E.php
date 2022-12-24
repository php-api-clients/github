<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C58E2D92A7Aba442Fdb0A439Eb965962E
{
    public const SCHEMA_JSON = '{"required":["total_count","secrets"],"type":"object","properties":{"total_count":{"type":"integer"},"secrets":{"type":"array","items":{"title":"Actions Secret","required":["name","created_at","updated_at"],"type":"object","properties":{"name":{"type":"string","description":"The name of the secret.","examples":["SECRET_TOKEN"]},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Set secrets for GitHub Actions."}}}}';
    public const SCHEMA_TITLE = 'c_58e2d92a7aba442fdb0a439eb965962e';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsSecret>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsSecret::class)
     */
    private array $secrets = array();
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\ActionsSecret>
     */
    public function secrets() : array
    {
        return $this->secrets;
    }
}
