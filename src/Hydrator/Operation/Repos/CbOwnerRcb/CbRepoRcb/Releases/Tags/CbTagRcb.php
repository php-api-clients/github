<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbTagRcb implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\GitHub\Schema\Release' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Release($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\GitHub\Schema\ReleaseAsset' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReleaseAsset($payload),
                'ApiClients\Client\GitHub\Schema\ReactionRollup' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReactionRollup($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Release(array $payload): \ApiClients\Client\GitHub\Schema\Release
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['assets_url'] ?? null;
    
                if ($value === null) {
                    $properties['assets_url'] = null;
                    goto after_assets_url;
                }

                $properties['assets_url'] = $value;
    
                after_assets_url:

                $value = $payload['upload_url'] ?? null;
    
                if ($value === null) {
                    $properties['upload_url'] = null;
                    goto after_upload_url;
                }

                $properties['upload_url'] = $value;
    
                after_upload_url:

                $value = $payload['tarball_url'] ?? null;
    
                if ($value === null) {
                    $properties['tarball_url'] = null;
                    goto after_tarball_url;
                }

                $properties['tarball_url'] = $value;
    
                after_tarball_url:

                $value = $payload['zipball_url'] ?? null;
    
                if ($value === null) {
                    $properties['zipball_url'] = null;
                    goto after_zipball_url;
                }

                $properties['zipball_url'] = $value;
    
                after_zipball_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['tag_name'] ?? null;
    
                if ($value === null) {
                    $properties['tag_name'] = null;
                    goto after_tag_name;
                }

                $properties['tag_name'] = $value;
    
                after_tag_name:

                $value = $payload['target_commitish'] ?? null;
    
                if ($value === null) {
                    $properties['target_commitish'] = null;
                    goto after_target_commitish;
                }

                $properties['target_commitish'] = $value;
    
                after_target_commitish:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['body'] ?? null;
    
                if ($value === null) {
                    $properties['body'] = null;
                    goto after_body;
                }

                $properties['body'] = $value;
    
                after_body:

                $value = $payload['draft'] ?? null;
    
                if ($value === null) {
                    $properties['draft'] = null;
                    goto after_draft;
                }

                $properties['draft'] = $value;
    
                after_draft:

                $value = $payload['prerelease'] ?? null;
    
                if ($value === null) {
                    $properties['prerelease'] = null;
                    goto after_prerelease;
                }

                $properties['prerelease'] = $value;
    
                after_prerelease:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['published_at'] ?? null;
    
                if ($value === null) {
                    $properties['published_at'] = null;
                    goto after_published_at;
                }

                $properties['published_at'] = $value;
    
                after_published_at:

                $value = $payload['author'] ?? null;
    
                if ($value === null) {
                    $properties['author'] = null;
                    goto after_author;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'author';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['author'] = $value;
    
                after_author:

                $value = $payload['assets'] ?? null;
    
                if ($value === null) {
                    $properties['assets'] = null;
                    goto after_assets;
                }

                static $assetsCaster1;
    
                if ($assetsCaster1 === null) {
                    $assetsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset',
));
                }
    
                $value = $assetsCaster1->cast($value, $this);

                $properties['assets'] = $value;
    
                after_assets:

                $value = $payload['body_html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_html';
                    goto after_body_html;
                }

                $properties['body_html'] = $value;
    
                after_body_html:

                $value = $payload['body_text'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_text';
                    goto after_body_text;
                }

                $properties['body_text'] = $value;
    
                after_body_text:

                $value = $payload['mentions_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'mentions_count';
                    goto after_mentions_count;
                }

                $properties['mentions_count'] = $value;
    
                after_mentions_count:

                $value = $payload['discussion_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'discussion_url';
                    goto after_discussion_url;
                }

                $properties['discussion_url'] = $value;
    
                after_discussion_url:

                $value = $payload['reactions'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'reactions';
                    goto after_reactions;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'reactions';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReactionRollup($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['reactions'] = $value;
    
                after_reactions:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Release', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Release::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\Release(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Release', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHub\Schema\SimpleUser
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['avatar_url'] ?? null;
    
                if ($value === null) {
                    $properties['avatar_url'] = null;
                    goto after_avatar_url;
                }

                $properties['avatar_url'] = $value;
    
                after_avatar_url:

                $value = $payload['gravatar_id'] ?? null;
    
                if ($value === null) {
                    $properties['gravatar_id'] = null;
                    goto after_gravatar_id;
                }

                $properties['gravatar_id'] = $value;
    
                after_gravatar_id:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['followers_url'] ?? null;
    
                if ($value === null) {
                    $properties['followers_url'] = null;
                    goto after_followers_url;
                }

                $properties['followers_url'] = $value;
    
                after_followers_url:

                $value = $payload['following_url'] ?? null;
    
                if ($value === null) {
                    $properties['following_url'] = null;
                    goto after_following_url;
                }

                $properties['following_url'] = $value;
    
                after_following_url:

                $value = $payload['gists_url'] ?? null;
    
                if ($value === null) {
                    $properties['gists_url'] = null;
                    goto after_gists_url;
                }

                $properties['gists_url'] = $value;
    
                after_gists_url:

                $value = $payload['starred_url'] ?? null;
    
                if ($value === null) {
                    $properties['starred_url'] = null;
                    goto after_starred_url;
                }

                $properties['starred_url'] = $value;
    
                after_starred_url:

                $value = $payload['subscriptions_url'] ?? null;
    
                if ($value === null) {
                    $properties['subscriptions_url'] = null;
                    goto after_subscriptions_url;
                }

                $properties['subscriptions_url'] = $value;
    
                after_subscriptions_url:

                $value = $payload['organizations_url'] ?? null;
    
                if ($value === null) {
                    $properties['organizations_url'] = null;
                    goto after_organizations_url;
                }

                $properties['organizations_url'] = $value;
    
                after_organizations_url:

                $value = $payload['repos_url'] ?? null;
    
                if ($value === null) {
                    $properties['repos_url'] = null;
                    goto after_repos_url;
                }

                $properties['repos_url'] = $value;
    
                after_repos_url:

                $value = $payload['events_url'] ?? null;
    
                if ($value === null) {
                    $properties['events_url'] = null;
                    goto after_events_url;
                }

                $properties['events_url'] = $value;
    
                after_events_url:

                $value = $payload['received_events_url'] ?? null;
    
                if ($value === null) {
                    $properties['received_events_url'] = null;
                    goto after_received_events_url;
                }

                $properties['received_events_url'] = $value;
    
                after_received_events_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['site_admin'] ?? null;
    
                if ($value === null) {
                    $properties['site_admin'] = null;
                    goto after_site_admin;
                }

                $properties['site_admin'] = $value;
    
                after_site_admin:

                $value = $payload['starred_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'starred_at';
                    goto after_starred_at;
                }

                $properties['starred_at'] = $value;
    
                after_starred_at:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\SimpleUser(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReleaseAsset(array $payload): \ApiClients\Client\GitHub\Schema\ReleaseAsset
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['browser_download_url'] ?? null;
    
                if ($value === null) {
                    $properties['browser_download_url'] = null;
                    goto after_browser_download_url;
                }

                $properties['browser_download_url'] = $value;
    
                after_browser_download_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['label'] ?? null;
    
                if ($value === null) {
                    $properties['label'] = null;
                    goto after_label;
                }

                $properties['label'] = $value;
    
                after_label:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['content_type'] ?? null;
    
                if ($value === null) {
                    $properties['content_type'] = null;
                    goto after_content_type;
                }

                $properties['content_type'] = $value;
    
                after_content_type:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $properties['size'] = null;
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

                $value = $payload['download_count'] ?? null;
    
                if ($value === null) {
                    $properties['download_count'] = null;
                    goto after_download_count;
                }

                $properties['download_count'] = $value;
    
                after_download_count:

                $value = $payload['created_at'] ?? null;
    
                if ($value === null) {
                    $properties['created_at'] = null;
                    goto after_created_at;
                }

                $properties['created_at'] = $value;
    
                after_created_at:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['uploader'] ?? null;
    
                if ($value === null) {
                    $properties['uploader'] = null;
                    goto after_uploader;
                }

                $properties['uploader'] = $value;
    
                after_uploader:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ReleaseAsset', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ReleaseAsset::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ReleaseAsset(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ReleaseAsset', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReactionRollup(array $payload): \ApiClients\Client\GitHub\Schema\ReactionRollup
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['total_count'] ?? null;
    
                if ($value === null) {
                    $properties['total_count'] = null;
                    goto after_total_count;
                }

                $properties['total_count'] = $value;
    
                after_total_count:

                $value = $payload['__p_l_u_s_e_s_1'] ?? null;
    
                if ($value === null) {
                    $properties['_PLUSES_1'] = null;
                    goto after__PLUSES_1;
                }

                $properties['_PLUSES_1'] = $value;
    
                after__PLUSES_1:

                $value = $payload['__m_i_n_u_s_1'] ?? null;
    
                if ($value === null) {
                    $properties['_MINUS_1'] = null;
                    goto after__MINUS_1;
                }

                $properties['_MINUS_1'] = $value;
    
                after__MINUS_1:

                $value = $payload['laugh'] ?? null;
    
                if ($value === null) {
                    $properties['laugh'] = null;
                    goto after_laugh;
                }

                $properties['laugh'] = $value;
    
                after_laugh:

                $value = $payload['confused'] ?? null;
    
                if ($value === null) {
                    $properties['confused'] = null;
                    goto after_confused;
                }

                $properties['confused'] = $value;
    
                after_confused:

                $value = $payload['heart'] ?? null;
    
                if ($value === null) {
                    $properties['heart'] = null;
                    goto after_heart;
                }

                $properties['heart'] = $value;
    
                after_heart:

                $value = $payload['hooray'] ?? null;
    
                if ($value === null) {
                    $properties['hooray'] = null;
                    goto after_hooray;
                }

                $properties['hooray'] = $value;
    
                after_hooray:

                $value = $payload['eyes'] ?? null;
    
                if ($value === null) {
                    $properties['eyes'] = null;
                    goto after_eyes;
                }

                $properties['eyes'] = $value;
    
                after_eyes:

                $value = $payload['rocket'] ?? null;
    
                if ($value === null) {
                    $properties['rocket'] = null;
                    goto after_rocket;
                }

                $properties['rocket'] = $value;
    
                after_rocket:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ReactionRollup::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ReactionRollup(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ReactionRollup', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $properties['message'] = null;
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['documentation_url'] ?? null;
    
                if ($value === null) {
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $properties['status'] = null;
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\Release' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Release($object),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
                'ApiClients\Client\GitHub\Schema\ReleaseAsset' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReleaseAsset($object),
                'ApiClients\Client\GitHub\Schema\ReactionRollup' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReactionRollup($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Release(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Release);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $assets_url = $object->assets_url;

        if ($assets_url === null) {
            goto after_assets_url;
        }
        after_assets_url:        $result['assets_url'] = $assets_url;

        
        $upload_url = $object->upload_url;

        if ($upload_url === null) {
            goto after_upload_url;
        }
        after_upload_url:        $result['upload_url'] = $upload_url;

        
        $tarball_url = $object->tarball_url;

        if ($tarball_url === null) {
            goto after_tarball_url;
        }
        after_tarball_url:        $result['tarball_url'] = $tarball_url;

        
        $zipball_url = $object->zipball_url;

        if ($zipball_url === null) {
            goto after_zipball_url;
        }
        after_zipball_url:        $result['zipball_url'] = $zipball_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $tag_name = $object->tag_name;

        if ($tag_name === null) {
            goto after_tag_name;
        }
        after_tag_name:        $result['tag_name'] = $tag_name;

        
        $target_commitish = $object->target_commitish;

        if ($target_commitish === null) {
            goto after_target_commitish;
        }
        after_target_commitish:        $result['target_commitish'] = $target_commitish;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $draft = $object->draft;

        if ($draft === null) {
            goto after_draft;
        }
        after_draft:        $result['draft'] = $draft;

        
        $prerelease = $object->prerelease;

        if ($prerelease === null) {
            goto after_prerelease;
        }
        after_prerelease:        $result['prerelease'] = $prerelease;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $published_at = $object->published_at;

        if ($published_at === null) {
            goto after_published_at;
        }
        after_published_at:        $result['published_at'] = $published_at;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($author);
        after_author:        $result['author'] = $author;

        
        $assets = $object->assets;

        if ($assets === null) {
            goto after_assets;
        }
        static $assetsSerializer0;

        if ($assetsSerializer0 === null) {
            $assetsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ReleaseAsset',
));
        }
        
        $assets = $assetsSerializer0->serialize($assets, $this);
        after_assets:        $result['assets'] = $assets;

        
        $body_html = $object->body_html;
        after_body_html:        $result['body_html'] = $body_html;

        
        $body_text = $object->body_text;
        after_body_text:        $result['body_text'] = $body_text;

        
        $mentions_count = $object->mentions_count;
        after_mentions_count:        $result['mentions_count'] = $mentions_count;

        
        $discussion_url = $object->discussion_url;
        after_discussion_url:        $result['discussion_url'] = $discussion_url;

        
        $reactions = $object->reactions;
        $reactions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReactionRollup($reactions);
        after_reactions:        $result['reactions'] = $reactions;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleUser);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;
        after_starred_at:        $result['starred_at'] = $starred_at;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReleaseAsset(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ReleaseAsset);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $browser_download_url = $object->browser_download_url;

        if ($browser_download_url === null) {
            goto after_browser_download_url;
        }
        after_browser_download_url:        $result['browser_download_url'] = $browser_download_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $label = $object->label;

        if ($label === null) {
            goto after_label;
        }
        after_label:        $result['label'] = $label;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $content_type = $object->content_type;

        if ($content_type === null) {
            goto after_content_type;
        }
        after_content_type:        $result['content_type'] = $content_type;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
        $download_count = $object->download_count;

        if ($download_count === null) {
            goto after_download_count;
        }
        after_download_count:        $result['download_count'] = $download_count;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $uploader = $object->uploader;

        if ($uploader === null) {
            goto after_uploader;
        }
        after_uploader:        $result['uploader'] = $uploader;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ReactionRollup(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ReactionRollup);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $total_count = $object->total_count;

        if ($total_count === null) {
            goto after_total_count;
        }
        after_total_count:        $result['total_count'] = $total_count;

        
        $_PLUSES_1 = $object->_PLUSES_1;

        if ($_PLUSES_1 === null) {
            goto after__PLUSES_1;
        }
        after__PLUSES_1:        $result['__p_l_u_s_e_s_1'] = $_PLUSES_1;

        
        $_MINUS_1 = $object->_MINUS_1;

        if ($_MINUS_1 === null) {
            goto after__MINUS_1;
        }
        after__MINUS_1:        $result['__m_i_n_u_s_1'] = $_MINUS_1;

        
        $laugh = $object->laugh;

        if ($laugh === null) {
            goto after_laugh;
        }
        after_laugh:        $result['laugh'] = $laugh;

        
        $confused = $object->confused;

        if ($confused === null) {
            goto after_confused;
        }
        after_confused:        $result['confused'] = $confused;

        
        $heart = $object->heart;

        if ($heart === null) {
            goto after_heart;
        }
        after_heart:        $result['heart'] = $heart;

        
        $hooray = $object->hooray;

        if ($hooray === null) {
            goto after_hooray;
        }
        after_hooray:        $result['hooray'] = $hooray;

        
        $eyes = $object->eyes;

        if ($eyes === null) {
            goto after_eyes;
        }
        after_eyes:        $result['eyes'] = $eyes;

        
        $rocket = $object->rocket;

        if ($rocket === null) {
            goto after_rocket;
        }
        after_rocket:        $result['rocket'] = $rocket;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
