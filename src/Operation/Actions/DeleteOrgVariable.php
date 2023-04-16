<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteOrgVariable
{
    public const OPERATION_ID    = 'actions/delete-org-variable';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/variables/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/actions/variables/{name}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the variable.**/
    private string $name;

    public function __construct(string $org, string $name)
    {
        $this->org  = $org;
        $this->name = $name;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{name}'], [$this->org, $this->name], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
