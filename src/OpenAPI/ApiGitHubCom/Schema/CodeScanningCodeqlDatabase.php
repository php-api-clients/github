<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CodeScanningCodeqlDatabase
{
    public const SCHEMA_TITLE = 'CodeQL Database';
    public const SCHEMA_DESCRIPTION = 'A CodeQL database.';
    /**
     * The ID of the CodeQL database.
     */
    private int $id;
    /**
     * The name of the CodeQL database.
     */
    private string $name;
    /**
     * The language of the CodeQL database.
     */
    private string $language;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $uploader;
    /**
     * The MIME type of the CodeQL database file.
     */
    private string $content_type;
    /**
     * The size of the CodeQL database file in bytes.
     */
    private int $size;
    /**
     * The date and time at which the CodeQL database was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $created_at;
    /**
     * The date and time at which the CodeQL database was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    private string $updated_at;
    /**
     * The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.
     */
    private string $url;
    /**
     * The ID of the CodeQL database.
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the CodeQL database.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The language of the CodeQL database.
     */
    public function language() : string
    {
        return $this->language;
    }
    /**
     * A GitHub user.
     */
    public function uploader() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->uploader;
    }
    /**
     * The MIME type of the CodeQL database file.
     */
    public function content_type() : string
    {
        return $this->content_type;
    }
    /**
     * The size of the CodeQL database file in bytes.
     */
    public function size() : int
    {
        return $this->size;
    }
    /**
     * The date and time at which the CodeQL database was created, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The date and time at which the CodeQL database was last updated, in ISO 8601 format':' YYYY-MM-DDTHH:MM:SSZ.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The URL at which to download the CodeQL database. The `Accept` header must be set to the value of the `content_type` property.
     */
    public function url() : string
    {
        return $this->url;
    }
}
