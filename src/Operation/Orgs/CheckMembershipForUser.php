<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class CheckMembershipForUser
{
    public const OPERATION_ID    = 'orgs/check-membership-for-user';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/members/{username}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The handle for the GitHub user account. **/
    private string $username;

    public function __construct(string $org, string $username)
    {
        $this->org      = $org;
        $this->username = $username;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{username}'], [$this->org, $this->username], self::PATH));
    }

    /**
     * @return array{code: int}|array{code: int,location: string}
     */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response if requester is an organization member and user is a member
             **/
            case 204:
                return ['code' => 204];
            /**
             * Response if requester is not an organization member
             **/

            case 302:
                return ['code' => 302, 'location' => $response->getHeaderLine('Location')];
            /**
             * Not Found if requester is an organization member and user is not a member
             **/

            case 404:
                return ['code' => 404];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
