<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C0F7483D30662Eb0B80F8Ce568Ea08A3E
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The new name of the user.","examples":["Omar Jahandar"]},"email":{"type":"string","description":"The publicly visible email address of the user.","examples":["omar@example.com"]},"blog":{"type":"string","description":"The new blog URL of the user.","examples":["blog.example.com"]},"twitter_username":{"type":["string","null"],"description":"The new Twitter username of the user.","examples":["therealomarj"]},"company":{"type":"string","description":"The new company of the user.","examples":["Acme corporation"]},"location":{"type":"string","description":"The new location of the user.","examples":["Berlin, Germany"]},"hireable":{"type":"boolean","description":"The new hiring availability of the user."},"bio":{"type":"string","description":"The new short biography of the user."}}}';
    public const SCHEMA_TITLE = 'c_0f7483d30662eb0b80f8ce568ea08a3e';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new name of the user.
     */
    private string $name;
    /**
     * The publicly visible email address of the user.
     */
    private string $email;
    /**
     * The new blog URL of the user.
     */
    private string $blog;
    /**
     * The new Twitter username of the user.
     */
    private ?string $twitter_username;
    /**
     * The new company of the user.
     */
    private string $company;
    /**
     * The new location of the user.
     */
    private string $location;
    /**
     * The new hiring availability of the user.
     */
    private bool $hireable;
    /**
     * The new short biography of the user.
     */
    private string $bio;
    /**
     * The new name of the user.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The publicly visible email address of the user.
     */
    public function email() : string
    {
        return $this->email;
    }
    /**
     * The new blog URL of the user.
     */
    public function blog() : string
    {
        return $this->blog;
    }
    /**
     * The new Twitter username of the user.
     */
    public function twitter_username() : ?string
    {
        return $this->twitter_username;
    }
    /**
     * The new company of the user.
     */
    public function company() : string
    {
        return $this->company;
    }
    /**
     * The new location of the user.
     */
    public function location() : string
    {
        return $this->location;
    }
    /**
     * The new hiring availability of the user.
     */
    public function hireable() : bool
    {
        return $this->hireable;
    }
    /**
     * The new short biography of the user.
     */
    public function bio() : string
    {
        return $this->bio;
    }
}
