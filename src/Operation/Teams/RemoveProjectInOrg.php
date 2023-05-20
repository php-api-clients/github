<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemoveProjectInOrg
{
    public const OPERATION_ID    = 'teams/remove-project-in-org';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/projects/{project_id}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**The unique identifier of the project. **/
    private int $projectId;

    public function __construct(string $org, string $teamSlug, int $projectId)
    {
        $this->org       = $org;
        $this->teamSlug  = $teamSlug;
        $this->projectId = $projectId;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{project_id}'], [$this->org, $this->teamSlug, $this->projectId], self::PATH));
    }

    /**
     * @return array{code: int}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
