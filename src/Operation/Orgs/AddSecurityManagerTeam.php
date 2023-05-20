<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class AddSecurityManagerTeam
{
    public const OPERATION_ID    = 'orgs/add-security-manager-team';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/security-managers/teams/{team_slug}';
    private const METHOD         = 'PUT';
    private const PATH           = '/orgs/{org}/security-managers/teams/{team_slug}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;

    public function __construct(string $org, string $teamSlug)
    {
        $this->org      = $org;
        $this->teamSlug = $teamSlug;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}'], [$this->org, $this->teamSlug], self::PATH));
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
            /**
             * The organization has reached the maximum number of security manager teams.
             **/

            case 409:
                return ['code' => 409];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
