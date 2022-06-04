<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class CreateUsingTemplate_
{
    private const OPERATION_ID = 'repos/create-using-template';
    /****/
    public string $template_owner;
    /****/
    public string $template_repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($template_owner, $template_repo)
    {
        $this->template_owner = $template_owner;
        $this->template_repo = $template_repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{template_owner}', '{template_repo}'), array($this->template_owner, $this->template_repo), '/repos/{template_owner}/{template_repo}/generate'));
    }
    function validateResponse()
    {
    }
}
