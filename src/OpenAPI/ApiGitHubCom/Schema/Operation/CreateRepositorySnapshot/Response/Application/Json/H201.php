<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\CreateRepositorySnapshot\Response\Application\Json;

final class H201
{
    public const SCHEMA_JSON = '{"required":["id","created_at","result","message"],"type":"object","properties":{"id":{"type":"integer","description":"ID of the created snapshot."},"created_at":{"type":"string","description":"The time at which the snapshot was created."},"result":{"type":"string","description":"Either \\"SUCCESS\\", \\"ACCEPTED\\", or \\"INVALID\\". \\"SUCCESS\\" indicates that the snapshot was successfully created and the repository\'s dependencies were updated. \\"ACCEPTED\\" indicates that the snapshot was successfully created, but the repository\'s dependencies were not updated. \\"INVALID\\" indicates that the snapshot was malformed."},"message":{"type":"string","description":"A message providing further details about the result, such as why the dependencies were not updated."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Operation\\CreateRepositorySnapshot\\Response\\Application\\Json\\H201';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * ID of the created snapshot.
     */
    public readonly int $id;
    /**
     * The time at which the snapshot was created.
     */
    public readonly string $created_at;
    /**
     * Either "SUCCESS", "ACCEPTED", or "INVALID". "SUCCESS" indicates that the snapshot was successfully created and the repository's dependencies were updated. "ACCEPTED" indicates that the snapshot was successfully created, but the repository's dependencies were not updated. "INVALID" indicates that the snapshot was malformed.
     */
    public readonly string $result;
    /**
     * A message providing further details about the result, such as why the dependencies were not updated.
     */
    public readonly string $message;
    public function __construct(int $id, string $created_at, string $result, string $message)
    {
        $this->id = $id;
        $this->created_at = $created_at;
        $this->result = $result;
        $this->message = $message;
    }
}
