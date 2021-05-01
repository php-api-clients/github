<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Users;

final class GetContextForUser
{
    private const OPERATION_ID = 'users/get-context-for-user';
    /****/
    public string $username;
    /**Identifies which additional information you'd like to receive about the person's hovercard. Can be `organization`, `repository`, `issue`, `pull_request`. **Required** when using `subject_id`.**/
    public string $subject_type;
    /**Uses the ID for the `subject_type` you specified. **Required** when using `subject_type`.**/
    public string $subject_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($username, $subject_type, $subject_id)
    {
        $this->username = $username;
        $this->subject_type = $subject_type;
        $this->subject_id = $subject_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{username}', '{subject_type}', '{subject_id}'), array($this->username, $this->subject_type, $this->subject_id), '/users/{username}/hovercard?subject_type={subject_type}&subject_id={subject_id}'));
    }
    function validateResponse()
    {
    }
}
