<?php
use Silex\Provider\FormServiceProvider;

$app = new Silex\Application();
error_reporting(E_ALL);
ini_set('display_errors', 1);
$app['debug'] = true;
//ajout twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/views',
));
$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    $twig->addFunction(new \Twig_SimpleFunction('asset', function ($asset) {
        // implement whatever logic you need to determine the asset path

        return sprintf('/silexTuto/web/src/%s', ltrim($asset, '/'));
    }));

    return $twig;
}));

//ajout urlgenerator pour path() dans twig
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
//ajout form pour les formulaires
$app->register(new FormServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
));
//ajout session
$app->register(new Silex\Provider\SessionServiceProvider(), array(
    'session.storage.save_path' => __DIR__ . '/../cache'
));
//ajout doctrine
$app->register(new DerAlex\Silex\YamlConfigServiceProvider(__DIR__ . '/setting.yml'));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => $app['config']['database']
));
//ajout mail
$app->register(new Silex\Provider\SwiftmailerServiceProvider());
$app['swiftmailer.options'] = $app['config']['swiftmailer'];



return $app;