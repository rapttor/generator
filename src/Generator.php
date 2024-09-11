<?php

namespace RapTToR;

/**
 *  @author RapTToR
 *  @package RapTToR\Generator
 */


class Generator
{
    /**
     * Generates a random user agent string based on optional parameters.
     * 
     * @param array $options Options to specify 'os', 'platform', 'browser', and 'version'.
     * @return string Generated user agent string.
     */
    public static function UserAgent($options = [])
    {
        $defaults = [
            'platform' => null,
            'os' => null,
            'browser' => null,
            'version' => null
        ];
        $options = array_merge($defaults, $options);

        $platform = $options['platform'] ?: self::randomPlatform();
        $os = $options['os'] ?: self::randomOs($platform);
        $browser = $options['browser'] ?: self::randomBrowser($platform);
        $version = $options['version'] ?: self::generateVersion($browser);

        return "$platform; $os) $browser/$version";
    }

    private static function randomPlatform()
    {
        $platforms = ['Windows', 'Macintosh', 'Linux', 'Android', 'iOS'];
        return $platforms[array_rand($platforms)];
    }

    private static function randomOs($platform)
    {
        $osData = [
            'Windows' => ['Windows 11', 'Windows 10', 'Windows 8.1', 'Windows 8', 'Windows 7', 'Windows Vista', 'Windows XP'],
            'Macintosh' => ['Mac OS X 10_15', 'Mac OS X 10_14', 'Mac OS X 10_13', 'Mac OS X 10_12', 'Mac OS X 10_11'],
            'Linux' => ['Ubuntu', 'Fedora', 'Debian', 'CentOS', 'Arch Linux', 'Red Hat', 'Linux Mint', 'Gentoo', 'Manjaro', 'Kali Linux'],
            'Android' => ['Android 13', 'Android 12', 'Android 11', 'Android 10', 'Android 9'],
            'iOS' => ['iPhone; CPU iPhone OS 15_0 like Mac OS X', 'iPhone; CPU iPhone OS 14_0 like Mac OS X']
        ];
        return $osData[$platform][array_rand($osData[$platform])];
    }

    private static function randomBrowser($platform)
    {
        $browserData = [
            'Windows' => ['Chrome', 'Firefox', 'Edge', 'Opera', 'QQBrowser'],
            'Macintosh' => ['Safari', 'Chrome', 'Firefox', 'Opera'],
            'Linux' => ['Firefox', 'Chrome', 'Opera'],
            'Android' => ['Chrome', 'Firefox'],
            'iOS' => ['Safari', 'Chrome', 'Firefox']
        ];
        return $browserData[$platform][array_rand($browserData[$platform])];
    }

    private static function generateVersion($browser)
    {
        $versionPatterns = [
            'Chrome' => rand(70, 130) . '.0.' . rand(3000, 4000) . '.' . rand(100, 200),
            'Firefox' => rand(50, 130) . '.0',
            'Safari' => rand(10, 15) . '.' . rand(0, 1) . '.' . rand(0, 5),
            'Edge' => rand(80, 95) . '.0.' . rand(3000, 4000) . '.' . rand(100, 200),
            'Opera' => rand(60, 75) . '.0.' . rand(3000, 4000) . '.' . rand(100, 200),
            'QQBrowser' => rand(10, 13) . '.' . rand(1, 5) . '.' . rand(0, 9)
        ];
        return $versionPatterns[$browser];
    }
}
