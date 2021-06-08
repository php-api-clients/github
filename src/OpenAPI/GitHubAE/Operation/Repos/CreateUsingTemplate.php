<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateUsingTemplate
{
    private const OPERATION_ID = 'repos/create-using-template';
    public string $template_owner;
    public string $template_repo;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($template_owner, $template_repo)
    {
        $this->template_owner = $template_owner;
        $this->template_repo  = $template_repo;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{template_owner}', '{template_repo}'], [$this->template_owner, $this->template_repo], '/repos/{template_owner}/{template_repo}/generate?'));
    }

    function validateResponse(): void
    {
    }
}
