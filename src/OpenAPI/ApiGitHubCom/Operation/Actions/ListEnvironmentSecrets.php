<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListEnvironmentSecrets
{
    private const OPERATION_ID = 'actions/list-environment-secrets';
    public int $repository_id;
    /**The name of the environment**/
    public string $environment_name;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($repository_id, $environment_name, int $per_page = 30, int $page = 1)
    {
        $this->repository_id    = $repository_id;
        $this->environment_name = $environment_name;
        $this->per_page         = $per_page;
        $this->page             = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{repository_id}', '{environment_name}', '{per_page}', '{page}'], [$this->repository_id, $this->environment_name, $this->per_page, $this->page], '/repositories/{repository_id}/environments/{environment_name}/secrets?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
