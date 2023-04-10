<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\DependencyGraph;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Sbom implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom($payload),
                'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($payload),
                'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($payload),
                'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages($payload),
                'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages⚡️ExternalRefs($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sbom'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sbom';
                goto after_sbom;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sbom';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sbom'] = $value;

            after_sbom:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['SPDXID'] ?? null;

            if ($value === null) {
                $missingFields[] = 'SPDXID';
                goto after_spdxid;
            }

            $properties['spdxid'] = $value;

            after_spdxid:

            $value = $payload['spdx_version'] ?? null;

            if ($value === null) {
                $missingFields[] = 'spdx_version';
                goto after_spdxVersion;
            }

            $properties['spdxVersion'] = $value;

            after_spdxVersion:

            $value = $payload['creation_info'] ?? null;

            if ($value === null) {
                $missingFields[] = 'creation_info';
                goto after_creationInfo;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'creationInfo';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['creationInfo'] = $value;

            after_creationInfo:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['data_license'] ?? null;

            if ($value === null) {
                $missingFields[] = 'data_license';
                goto after_dataLicense;
            }

            $properties['dataLicense'] = $value;

            after_dataLicense:

            $value = $payload['document_describes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'document_describes';
                goto after_documentDescribes;
            }

            $properties['documentDescribes'] = $value;

            after_documentDescribes:

            $value = $payload['document_namespace'] ?? null;

            if ($value === null) {
                $missingFields[] = 'document_namespace';
                goto after_documentNamespace;
            }

            $properties['documentNamespace'] = $value;

            after_documentNamespace:

            $value = $payload['packages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'packages';
                goto after_packages;
            }

            static $packagesCaster1;

            if ($packagesCaster1 === null) {
                $packagesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\Packages',
));
            }

            $value = $packagesCaster1->cast($value, $this);

            $properties['packages'] = $value;

            after_packages:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['created'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created';
                goto after_created;
            }

            $properties['created'] = $value;

            after_created:

            $value = $payload['creators'] ?? null;

            if ($value === null) {
                $missingFields[] = 'creators';
                goto after_creators;
            }

            $properties['creators'] = $value;

            after_creators:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['SPDXID'] ?? null;

            if ($value === null) {
                $properties['spdxid'] = null;
                goto after_spdxid;
            }

            $properties['spdxid'] = $value;

            after_spdxid:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['version_info'] ?? null;

            if ($value === null) {
                $properties['versionInfo'] = null;
                goto after_versionInfo;
            }

            $properties['versionInfo'] = $value;

            after_versionInfo:

            $value = $payload['download_location'] ?? null;

            if ($value === null) {
                $properties['downloadLocation'] = null;
                goto after_downloadLocation;
            }

            $properties['downloadLocation'] = $value;

            after_downloadLocation:

            $value = $payload['files_analyzed'] ?? null;

            if ($value === null) {
                $properties['filesAnalyzed'] = null;
                goto after_filesAnalyzed;
            }

            $properties['filesAnalyzed'] = $value;

            after_filesAnalyzed:

            $value = $payload['license_concluded'] ?? null;

            if ($value === null) {
                $properties['licenseConcluded'] = null;
                goto after_licenseConcluded;
            }

            $properties['licenseConcluded'] = $value;

            after_licenseConcluded:

            $value = $payload['license_declared'] ?? null;

            if ($value === null) {
                $properties['licenseDeclared'] = null;
                goto after_licenseDeclared;
            }

            $properties['licenseDeclared'] = $value;

            after_licenseDeclared:

            $value = $payload['supplier'] ?? null;

            if ($value === null) {
                $properties['supplier'] = null;
                goto after_supplier;
            }

            $properties['supplier'] = $value;

            after_supplier:

            $value = $payload['external_refs'] ?? null;

            if ($value === null) {
                $properties['externalRefs'] = null;
                goto after_externalRefs;
            }

            static $externalRefsCaster1;

            if ($externalRefsCaster1 === null) {
                $externalRefsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\Packages\\ExternalRefs',
));
            }

            $value = $externalRefsCaster1->cast($value, $this);

            $properties['externalRefs'] = $value;

            after_externalRefs:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages⚡️ExternalRefs(array $payload): \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['reference_category'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reference_category';
                goto after_referenceCategory;
            }

            $properties['referenceCategory'] = $value;

            after_referenceCategory:

            $value = $payload['reference_locator'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reference_locator';
                goto after_referenceLocator;
            }

            $properties['referenceLocator'] = $value;

            after_referenceLocator:

            $value = $payload['reference_type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reference_type';
                goto after_referenceType;
            }

            $properties['referenceType'] = $value;

            after_referenceType:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs', $exception, stack: $this->hydrationStack);
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
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

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
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom($object),
            'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($object),
            'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($object),
            'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages($object),
            'ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages⚡️ExternalRefs($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom);
        $result = [];

        $sbom = $object->sbom;
        $sbom = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom($sbom);
        after_sbom:        $result['sbom'] = $sbom;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom);
        $result = [];

        $spdxid = $object->spdxid;
        after_spdxid:        $result['SPDXID'] = $spdxid;

        
        $spdxVersion = $object->spdxVersion;
        after_spdxVersion:        $result['spdx_version'] = $spdxVersion;

        
        $creationInfo = $object->creationInfo;
        $creationInfo = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo($creationInfo);
        after_creationInfo:        $result['creation_info'] = $creationInfo;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $dataLicense = $object->dataLicense;
        after_dataLicense:        $result['data_license'] = $dataLicense;

        
        $documentDescribes = $object->documentDescribes;
        static $documentDescribesSerializer0;

        if ($documentDescribesSerializer0 === null) {
            $documentDescribesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $documentDescribes = $documentDescribesSerializer0->serialize($documentDescribes, $this);
        after_documentDescribes:        $result['document_describes'] = $documentDescribes;

        
        $documentNamespace = $object->documentNamespace;
        after_documentNamespace:        $result['document_namespace'] = $documentNamespace;

        
        $packages = $object->packages;
        static $packagesSerializer0;

        if ($packagesSerializer0 === null) {
            $packagesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\Packages',
));
        }
        
        $packages = $packagesSerializer0->serialize($packages, $this);
        after_packages:        $result['packages'] = $packages;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️CreationInfo(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo);
        $result = [];

        $created = $object->created;
        after_created:        $result['created'] = $created;

        
        $creators = $object->creators;
        static $creatorsSerializer0;

        if ($creatorsSerializer0 === null) {
            $creatorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $creators = $creatorsSerializer0->serialize($creators, $this);
        after_creators:        $result['creators'] = $creators;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages);
        $result = [];

        $spdxid = $object->spdxid;

        if ($spdxid === null) {
            goto after_spdxid;
        }
        after_spdxid:        $result['SPDXID'] = $spdxid;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $versionInfo = $object->versionInfo;

        if ($versionInfo === null) {
            goto after_versionInfo;
        }
        after_versionInfo:        $result['version_info'] = $versionInfo;

        
        $downloadLocation = $object->downloadLocation;

        if ($downloadLocation === null) {
            goto after_downloadLocation;
        }
        after_downloadLocation:        $result['download_location'] = $downloadLocation;

        
        $filesAnalyzed = $object->filesAnalyzed;

        if ($filesAnalyzed === null) {
            goto after_filesAnalyzed;
        }
        after_filesAnalyzed:        $result['files_analyzed'] = $filesAnalyzed;

        
        $licenseConcluded = $object->licenseConcluded;

        if ($licenseConcluded === null) {
            goto after_licenseConcluded;
        }
        after_licenseConcluded:        $result['license_concluded'] = $licenseConcluded;

        
        $licenseDeclared = $object->licenseDeclared;

        if ($licenseDeclared === null) {
            goto after_licenseDeclared;
        }
        after_licenseDeclared:        $result['license_declared'] = $licenseDeclared;

        
        $supplier = $object->supplier;

        if ($supplier === null) {
            goto after_supplier;
        }
        after_supplier:        $result['supplier'] = $supplier;

        
        $externalRefs = $object->externalRefs;

        if ($externalRefs === null) {
            goto after_externalRefs;
        }
        static $externalRefsSerializer0;

        if ($externalRefsSerializer0 === null) {
            $externalRefsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\DependencyGraphSpdxSbom\\Sbom\\Packages\\ExternalRefs',
));
        }
        
        $externalRefs = $externalRefsSerializer0->serialize($externalRefs, $this);
        after_externalRefs:        $result['external_refs'] = $externalRefs;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️DependencyGraphSpdxSbom⚡️Sbom⚡️Packages⚡️ExternalRefs(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages\ExternalRefs);
        $result = [];

        $referenceCategory = $object->referenceCategory;
        after_referenceCategory:        $result['reference_category'] = $referenceCategory;

        
        $referenceLocator = $object->referenceLocator;
        after_referenceLocator:        $result['reference_locator'] = $referenceLocator;

        
        $referenceType = $object->referenceType;
        after_referenceType:        $result['reference_type'] = $referenceType;


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

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
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
