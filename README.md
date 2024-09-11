# PHP class

- Feature Generator

## Install

    composer require rapttor/generator

or

      "require": {
        "rapttor/generator": "dev-master"
      },
      "repositories":[
        {
          "type": "vcs",
          "url": "https://github.com/rapttor/generator.git"
        }
      ]

## Example usage

    $agent=\RapTToR\Generator::UserAgent();
    $agent=\RapTToR\Generator::UserAgent(['platform' => 'Windows']);
    $agent=\RapTToR\Generator::UserAgent(['platform' => 'Macintosh']);
