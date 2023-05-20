<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function str_replace;

final class DeleteOrgSecret
{
    public const OPERATION_ID    = 'actions/delete-org-secret';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/secrets/{secret_name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/secrets/{secret_name}';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The name of the secret. **/
    private string $secretName;

    public function __construct(string $org, string $secretName)
    {
        $this->org        = $org;
        $this->secretName = $secretName;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{secret_name}'], [$this->org, $this->secretName], self::PATH));
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
