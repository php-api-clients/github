<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Orgs;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class AddSecurityManagerTeam
{
    public const OPERATION_ID = 'orgs/add-security-manager-team';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/security-managers/teams/{team_slug}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/security-managers/teams/{team_slug}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The slug of the team name.**/
    private string $teamSlug;
    public function __construct(string $org, string $teamSlug)
    {
        $this->org = $org;
        $this->teamSlug = $teamSlug;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{team_slug}'), array($this->org, $this->teamSlug), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
