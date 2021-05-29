<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetContextForUser
{
    private const OPERATION_ID = 'users/get-context-for-user';
    public string $username;
    /**Identifies which additional information you'd like to receive about the person's hovercard. Can be `organization`, `repository`, `issue`, `pull_request`. **Required** when using `subject_id`.**/
    public string $subject_type;
    /**Uses the ID for the `subject_type` you specified. **Required** when using `subject_type`.**/
    public string $subject_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, $subject_type, $subject_id)
    {
        $this->username     = $username;
        $this->subject_type = $subject_type;
        $this->subject_id   = $subject_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{subject_type}', '{subject_id}'], [$this->username, $this->subject_type, $this->subject_id], '/users/{username}/hovercard?subject_type={subject_type}&subject_id={subject_id}'));
    }

    function validateResponse(): void
    {
    }
}
