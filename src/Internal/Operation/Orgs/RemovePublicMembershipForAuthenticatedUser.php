<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class RemovePublicMembershipForAuthenticatedUser
{
    public const OPERATION_ID    = 'orgs/remove-public-membership-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/public_members/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/public_members/{username}';
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

    /** @return array{code: int} */
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
