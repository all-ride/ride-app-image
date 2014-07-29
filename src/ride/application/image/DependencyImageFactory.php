<?php

namespace ride\application\image;

use ride\library\dependency\DependencyInjector;
use ride\library\image\ImageFactory;

/**
 * Image factory through the dependency injector
 */
class DependencyImageFactory implements ImageFactory {

    /**
     * Instance of the dependency injector
     * @var \ride\library\dependency\DependencyInjector
     */
    protected $dependencyInjector;

    /**
     * Id of the image dependency (underlaying library)
     * @var string
     */
    protected $id;

    /**
     * Constructs a new image factory
     * @param \ride\library\dependency\DependencyInjector $dependencyInjector
     * @param string $id Id of the image dependency
     * @return null
     */
    public function __construct(dependencyInjector $dependencyInjector, $id = null) {
        $this->dependencyInjector = $dependencyInjector;
        $this->id = $id;
    }

    /**
     * Creates an image object
     * @return \ride\library\image\Image
     */
    public function createImage() {
        return $this->dependencyInjector->get('ride\\library\\image\\Image', $this->id, array());
    }

}
