<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class RemoveCustomLabelFromSelfHostedRunnerForOrg_
{
    private const OPERATION_ID = 'actions/remove-custom-label-from-self-hosted-runner-for-org';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**Unique identifier of the self-hosted runner.**/
    public int $runner_id;
    /**The name of a self-hosted runner's custom label.**/
    public string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $runner_id, $name)
    {
        $this->org = $org;
        $this->runner_id = $runner_id;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{runner_id}', '{name}'), array($this->org, $this->runner_id, $this->name), '/orgs/{org}/actions/runners/{runner_id}/labels/{name}'));
    }
    function validateResponse()
    {
    }
}
