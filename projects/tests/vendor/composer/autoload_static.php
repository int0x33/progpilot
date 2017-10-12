<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10b89e91758a50b27e7946bbe3666da8
{
    public static $prefixLengthsPsr4 = array (
                                           'c' =>
                                           array (
                                                   'cweagans\\Composer\\' => 18,
                                           ),
                                           'S' =>
                                           array (
                                                   'Symfony\\Component\\Yaml\\' => 23,
                                           ),
                                           'P' =>
                                           array (
                                                   'PhpParser\\' => 10,
                                                   'PHPCfg\\' => 7,
                                           ),
                                       );

    public static $prefixDirsPsr4 = array (
                                        'cweagans\\Composer\\' =>
                                        array (
                                            0 => __DIR__ . '/..' . '/cweagans/composer-patches/src',
                                        ),
                                        'Symfony\\Component\\Yaml\\' =>
                                        array (
                                            0 => __DIR__ . '/..' . '/symfony/yaml',
                                        ),
                                        'PhpParser\\' =>
                                        array (
                                            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
                                        ),
                                        'PHPCfg\\' =>
                                        array (
                                            0 => __DIR__ . '/..' . '/ircmaxell/php-cfg/lib/PHPCfg',
                                        ),
                                    );

    public static $prefixesPsr0 = array (
                                      'p' =>
                                      array (
                                          'progpilot' =>
                                          array (
                                                  0 => __DIR__ . '/..' . '/progpilot/package/src',
                                          ),
                                          'phpDocumentor' =>
                                          array (
                                                  0 => __DIR__ . '/..' . '/phpdocumentor/graphviz/src',
                                                  1 => __DIR__ . '/..' . '/phpdocumentor/graphviz/tests/unit',
                                          ),
                                      ),
                                  );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader)
        {
            $loader->prefixLengthsPsr4 = ComposerStaticInit10b89e91758a50b27e7946bbe3666da8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10b89e91758a50b27e7946bbe3666da8::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit10b89e91758a50b27e7946bbe3666da8::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
