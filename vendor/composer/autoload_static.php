<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc2fbb2fa01e8617d27effd7f1d64428b
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\Cache\\' => 10,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
            'Grpc\\Gcp\\' => 9,
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'Google\\Cloud\\Vision\\' => 20,
            'Google\\Cloud\\Core\\' => 18,
            'Google\\Auth\\' => 12,
            'Google\\ApiCore\\' => 15,
            'Google\\' => 7,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\Google\\Cloud\\Vision\\' => 32,
            'GPBMetadata\\Google\\' => 19,
            'GPBMetadata\\ApiCore\\' => 20,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Grpc\\Gcp\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/grpc-gcp/src',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'Google\\Cloud\\Vision\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/cloud-vision/src',
        ),
        'Google\\Cloud\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/cloud-core/src',
        ),
        'Google\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/auth/src',
        ),
        'Google\\ApiCore\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/src',
        ),
        'Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/common-protos/src',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Cloud\\Vision\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/cloud-vision/metadata',
        ),
        'GPBMetadata\\Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/common-protos/metadata',
        ),
        'GPBMetadata\\ApiCore\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/gax/metadata/ApiCore',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rize\\UriTemplate' => 
            array (
                0 => __DIR__ . '/..' . '/rize/uri-template/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GPBMetadata\\GrpcGcp' => __DIR__ . '/..' . '/google/grpc-gcp/src/generated/GPBMetadata/GrpcGcp.php',
        'Grpc\\Gcp\\AffinityConfig' => __DIR__ . '/..' . '/google/grpc-gcp/src/generated/Grpc/Gcp/AffinityConfig.php',
        'Grpc\\Gcp\\AffinityConfig_Command' => __DIR__ . '/..' . '/google/grpc-gcp/src/generated/Grpc/Gcp/AffinityConfig_Command.php',
        'Grpc\\Gcp\\ApiConfig' => __DIR__ . '/..' . '/google/grpc-gcp/src/generated/Grpc/Gcp/ApiConfig.php',
        'Grpc\\Gcp\\ChannelPoolConfig' => __DIR__ . '/..' . '/google/grpc-gcp/src/generated/Grpc/Gcp/ChannelPoolConfig.php',
        'Grpc\\Gcp\\MethodConfig' => __DIR__ . '/..' . '/google/grpc-gcp/src/generated/Grpc/Gcp/MethodConfig.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc2fbb2fa01e8617d27effd7f1d64428b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc2fbb2fa01e8617d27effd7f1d64428b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc2fbb2fa01e8617d27effd7f1d64428b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc2fbb2fa01e8617d27effd7f1d64428b::$classMap;

        }, null, ClassLoader::class);
    }
}
