<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C2E0Ba6D50526Abe6815D358Bdd2Cef24
{
    public const SCHEMA_JSON = '{"required":["id","node_id","name","full_name","private"],"type":"object","properties":{"full_name":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the repository"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"private":{"type":"boolean","description":"Whether the repository is private or public."}}}';
    public const SCHEMA_TITLE = 'c_2e0ba6d50526abe6815d358bdd2cef24';
    public const SCHEMA_DESCRIPTION = '';
    private string $full_name;
    /**
     * Unique identifier of the repository
     */
    private int $id;
    /**
     * The name of the repository.
     */
    private string $name;
    private string $node_id;
    /**
     * Whether the repository is private or public.
     */
    private bool $private;
    public function full_name() : string
    {
        return $this->full_name;
    }
    /**
     * Unique identifier of the repository
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Whether the repository is private or public.
     */
    public function private() : bool
    {
        return $this->private;
    }
}
