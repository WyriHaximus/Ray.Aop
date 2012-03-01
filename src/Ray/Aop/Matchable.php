<?php
/**
 * Ray
 *
 * @package Ray.Di
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */
namespace Ray\Aop;

use Doctrine\Common\Annotations\Reader;

/**
 * Supports matching classes and methods.
 *
 * @package Ray.Di
 *
 */
interface Matchable
{
    /**
     * Constructor
     *
     * @param Reader $reader
     */
    public function __construct(Reader $reader);

    /**
     * Any match
     *
     * @return Ray\Di\Matcher
     */
    public function any();

    /**
     * Match binding annotation
     *
     * @param string $annotationName
     *
     * @return array
     */
    public function annotatedWith($annotationName);

    /**
     * Return subclass matche result
     *
     * @param string $superClass
     *
     * @return bool
     */
    public function subclassesOf($superClass);

    /**
     * Return match result
     *
     * @param string $class
     * @param bool   $target self::TARGET_CLASS | self::TARGET_METHOD
     *
     * @return bool | array [$matcher, method]
     */
    public function __invoke($class, $target);

}