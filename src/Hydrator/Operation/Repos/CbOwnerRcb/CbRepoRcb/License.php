<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class License implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\LicenseContent' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseContent($payload),
                'ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Entries⚡️Links($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseContent(array $payload): \ApiClients\Client\GitHub\Schema\LicenseContent
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

                $value = $payload['path'] ?? null;
    
                if ($value === null) {
                    $properties['path'] = null;
                    goto after_path;
                }

                $properties['path'] = $value;
    
                after_path:

                $value = $payload['sha'] ?? null;
    
                if ($value === null) {
                    $properties['sha'] = null;
                    goto after_sha;
                }

                $properties['sha'] = $value;
    
                after_sha:

                $value = $payload['size'] ?? null;
    
                if ($value === null) {
                    $properties['size'] = null;
                    goto after_size;
                }

                $properties['size'] = $value;
    
                after_size:

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

                $value = $payload['git_url'] ?? null;
    
                if ($value === null) {
                    $properties['git_url'] = null;
                    goto after_git_url;
                }

                $properties['git_url'] = $value;
    
                after_git_url:

                $value = $payload['download_url'] ?? null;
    
                if ($value === null) {
                    $properties['download_url'] = null;
                    goto after_download_url;
                }

                $properties['download_url'] = $value;
    
                after_download_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['content'] ?? null;
    
                if ($value === null) {
                    $properties['content'] = null;
                    goto after_content;
                }

                $properties['content'] = $value;
    
                after_content:

                $value = $payload['encoding'] ?? null;
    
                if ($value === null) {
                    $properties['encoding'] = null;
                    goto after_encoding;
                }

                $properties['encoding'] = $value;
    
                after_encoding:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $properties['_links'] = null;
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Entries⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

                $value = $payload['license'] ?? null;
    
                if ($value === null) {
                    $properties['license'] = null;
                    goto after_license;
                }

                $properties['license'] = $value;
    
                after_license:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseContent', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\LicenseContent::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\LicenseContent(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\LicenseContent', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Entries⚡️Links(array $payload): \ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['git'] ?? null;
    
                if ($value === null) {
                    $properties['git'] = null;
                    goto after_git;
                }

                $properties['git'] = $value;
    
                after_git:

                $value = $payload['html'] ?? null;
    
                if ($value === null) {
                    $properties['html'] = null;
                    goto after_html;
                }

                $properties['html'] = $value;
    
                after_html:

                $value = $payload['self'] ?? null;
    
                if ($value === null) {
                    $properties['self'] = null;
                    goto after_self;
                }

                $properties['self'] = $value;
    
                after_self:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links', $exception, stack: $this->hydrationStack);
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
                'ApiClients\Client\GitHub\Schema\LicenseContent' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseContent($object),
                'ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Entries⚡️Links($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️LicenseContent(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\LicenseContent);
        $result = [];
        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $path = $object->path;

        if ($path === null) {
            goto after_path;
        }
        after_path:        $result['path'] = $path;

        
        $sha = $object->sha;

        if ($sha === null) {
            goto after_sha;
        }
        after_sha:        $result['sha'] = $sha;

        
        $size = $object->size;

        if ($size === null) {
            goto after_size;
        }
        after_size:        $result['size'] = $size;

        
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

        
        $git_url = $object->git_url;

        if ($git_url === null) {
            goto after_git_url;
        }
        after_git_url:        $result['git_url'] = $git_url;

        
        $download_url = $object->download_url;

        if ($download_url === null) {
            goto after_download_url;
        }
        after_download_url:        $result['download_url'] = $download_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $content = $object->content;

        if ($content === null) {
            goto after_content;
        }
        after_content:        $result['content'] = $content;

        
        $encoding = $object->encoding;

        if ($encoding === null) {
            goto after_encoding;
        }
        after_encoding:        $result['encoding'] = $encoding;

        
        $_links = $object->_links;

        if ($_links === null) {
            goto after__links;
        }
        $_links = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Entries⚡️Links($_links);
        after__links:        $result['_links'] = $_links;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        after_license:        $result['license'] = $license;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ContentTree⚡️Entries⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ContentTree\Entries\Links);
        $result = [];
        
        $git = $object->git;

        if ($git === null) {
            goto after_git;
        }
        after_git:        $result['git'] = $git;

        
        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }
        after_html:        $result['html'] = $html;

        
        $self = $object->self;

        if ($self === null) {
            goto after_self;
        }
        after_self:        $result['self'] = $self;


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
