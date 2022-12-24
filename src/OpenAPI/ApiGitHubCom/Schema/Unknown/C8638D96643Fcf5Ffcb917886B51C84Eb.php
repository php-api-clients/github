<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C8638D96643Fcf5Ffcb917886B51C84Eb
{
    public const SCHEMA_JSON = '{"required":["id","created_at","result","message"],"type":"object","properties":{"id":{"type":"integer","description":"ID of the created snapshot."},"created_at":{"type":"string","description":"The time at which the snapshot was created."},"result":{"type":"string","description":"Either \\"SUCCESS\\", \\"ACCEPTED\\", or \\"INVALID\\". \\"SUCCESS\\" indicates that the snapshot was successfully created and the repository\'s dependencies were updated. \\"ACCEPTED\\" indicates that the snapshot was successfully created, but the repository\'s dependencies were not updated. \\"INVALID\\" indicates that the snapshot was malformed."},"message":{"type":"string","description":"A message providing further details about the result, such as why the dependencies were not updated."}}}';
    public const SCHEMA_TITLE = 'c_8638d96643fcf5ffcb917886b51c84eb';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * ID of the created snapshot.
     */
    private int $id;
    /**
     * The time at which the snapshot was created.
     */
    private string $created_at;
    /**
     * Either "SUCCESS", "ACCEPTED", or "INVALID". "SUCCESS" indicates that the snapshot was successfully created and the repository's dependencies were updated. "ACCEPTED" indicates that the snapshot was successfully created, but the repository's dependencies were not updated. "INVALID" indicates that the snapshot was malformed.
     */
    private string $result;
    /**
     * A message providing further details about the result, such as why the dependencies were not updated.
     */
    private string $message;
    /**
     * ID of the created snapshot.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The time at which the snapshot was created.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * Either "SUCCESS", "ACCEPTED", or "INVALID". "SUCCESS" indicates that the snapshot was successfully created and the repository's dependencies were updated. "ACCEPTED" indicates that the snapshot was successfully created, but the repository's dependencies were not updated. "INVALID" indicates that the snapshot was malformed.
     */
    public function result() : string
    {
        return $this->result;
    }
    /**
     * A message providing further details about the result, such as why the dependencies were not updated.
     */
    public function message() : string
    {
        return $this->message;
    }
}
