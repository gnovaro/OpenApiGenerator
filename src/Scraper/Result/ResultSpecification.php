<?php
namespace wapmorgan\OpenApiGenerator\Scraper\Result;

use wapmorgan\OpenApiGenerator\InitableObject;

class ResultSpecification extends InitableObject
{
    /**
     * @var string|null Specification version
     */
    public $version;

    /**
     * @var string Specification description
     */
    public $description;

    /**
     * @var ResultTag[]
     */
    public $tags = [];

    /**
     * @var ResultPath[]
     */
    public $paths = [];

    /**
     * @var ResultServer[] List of servers
     */
    public $servers = [];

    /**
     * @var ResultSecurityScheme[] List of security schemes
     */
    public $securitySchemes = [];

    /**
     * @var int Number of paths
     */
    public $totalPaths = 0;
}
