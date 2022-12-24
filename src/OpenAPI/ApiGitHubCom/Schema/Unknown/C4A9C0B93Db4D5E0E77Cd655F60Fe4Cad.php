<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C4A9C0B93Db4D5E0E77Cd655F60Fe4Cad
{
    public const SCHEMA_JSON = '{"required":["environment_ids","state","comment"],"type":"object","properties":{"environment_ids":{"type":"array","items":{"type":"integer","examples":[161171787]},"description":"The list of environment ids to approve or reject","examples":[161171787,161171795]},"state":{"enum":["approved","rejected"],"type":"string","description":"Whether to approve or reject deployment to the specified environments.","examples":["approved"]},"comment":{"type":"string","description":"A comment to accompany the deployment review","examples":["Ship it!"]}}}';
    public const SCHEMA_TITLE = 'c_4a9c0b93db4d5e0e77cd655f60fe4cad';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The list of environment ids to approve or reject
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C92B2Cb9Ef1Ed73Ad5D2F519Ca3Ba91Ec>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C92B2Cb9Ef1Ed73Ad5D2F519Ca3Ba91Ec::class)
     */
    private array $environment_ids = array();
    /**
     * Whether to approve or reject deployment to the specified environments.
     */
    private string $state;
    /**
     * A comment to accompany the deployment review
     */
    private string $comment;
    /**
     * The list of environment ids to approve or reject
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C92B2Cb9Ef1Ed73Ad5D2F519Ca3Ba91Ec>
     */
    public function environment_ids() : array
    {
        return $this->environment_ids;
    }
    /**
     * Whether to approve or reject deployment to the specified environments.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * A comment to accompany the deployment review
     */
    public function comment() : string
    {
        return $this->comment;
    }
}
