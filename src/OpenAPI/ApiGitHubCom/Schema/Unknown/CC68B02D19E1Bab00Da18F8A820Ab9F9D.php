<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC68B02D19E1Bab00Da18F8A820Ab9F9D
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}}';
    public const SCHEMA_TITLE = 'c_c68b02d19e1bab00da18f8a820ab9f9d';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C $UBUNTU;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C $MACOS;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C $WINDOWS;
    public function UBUNTU() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C
    {
        return $this->UBUNTU;
    }
    public function MACOS() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C
    {
        return $this->MACOS;
    }
    public function WINDOWS() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C6Cef235C04D453D8D14Aaceb20Bf342C
    {
        return $this->WINDOWS;
    }
}
