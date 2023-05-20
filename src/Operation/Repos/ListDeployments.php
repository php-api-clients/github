<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDeployments
{
    public const OPERATION_ID    = 'repos/list-deployments';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/deployments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/deployments';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The SHA recorded at creation time. **/
    private string $sha;
    /**The name of the ref. This can be a branch, tag, or SHA. **/
    private string $ref;
    /**The name of the task for the deployment (e.g., `deploy` or `deploy:migrations`). **/
    private string $task;
    /**The name of the environment that was deployed to (e.g., `staging` or `production`). **/
    private string|null $environment;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string|null $environment = 'none', int $perPage = 30, int $page = 1)
    {
        $this->owner       = $owner;
        $this->repo        = $repo;
        $this->sha         = $sha;
        $this->ref         = $ref;
        $this->task        = $task;
        $this->environment = $environment;
        $this->perPage     = $perPage;
        $this->page        = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{sha}', '{ref}', '{task}', '{environment}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->sha, $this->ref, $this->task, $this->environment, $this->perPage, $this->page], self::PATH . '?sha={sha}&ref={ref}&task={task}&environment={environment}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
