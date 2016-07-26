<?php

namespace ride\application\image;

use ride\library\dependency\DependencyInjector;
use ride\library\image\GenericImageFactory;

/**
 * Image factory through the dependency injector
 */
class DependencyImageFactory extends GenericImageFactory {

    /**
     * Instance of the dependency injector
     * @var \ride\library\dependency\DependencyInjector
     */
    protected $dependencyInjector;

    /**
     * Constructs a new image factory
     * @param \ride\library\dependency\DependencyInjector $dependencyInjector
     * @param string $id Id of the image dependency
     * @return null
     */
    public function __construct(dependencyInjector $dependencyInjector, $image = null) {
        $this->dependencyInjector = $dependencyInjector;
        $this->image = $image;
    }

    /**
     * Creates an image object
     * @return \ride\library\image\Image
     */
    public function createImage() {
        return $this->dependencyInjector->get('ride\\library\\image\\Image', $this->image, array());
    }

}
