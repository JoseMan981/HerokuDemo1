<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/log-viewer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::logs.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/log-viewer/logs/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::logs.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nhu3tWK9IEhCVjAD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1S6LEkM00m5tp6Ru',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/log\\-viewer/logs/([^/]++)(?|(*:36)|/(?|download(*:55)|([^/]++)(?|(*:73)|/search(*:87))))|/([^/]++)(*:106)|/IATA/([^/]++)(*:128)|/([^/]++)/(?|gam(*:152)|noticias(*:168)|biblioteca(*:186)|article/([^/]++)(?|(*:213)|/([^/]++)(*:230))))/?$}sDu',
    ),
    3 => 
    array (
      36 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::logs.show',
          ),
          1 => 
          array (
            0 => 'date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      55 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::logs.download',
          ),
          1 => 
          array (
            0 => 'date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::logs.filter',
          ),
          1 => 
          array (
            0 => 'date',
            1 => 'level',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      87 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'log-viewer::logs.search',
          ),
          1 => 
          array (
            0 => 'date',
            1 => 'level',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g35UYpbKGMN6he30',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::759OVqNN8K5OgOGs',
          ),
          1 => 
          array (
            0 => 'IATA',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2iEH4ONBUycxNCEL',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2uM97g4q2zbudVaj',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tZyWfqQFkM445IJ3',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DspnWBvMISANqLos',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'urlName',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2kl2inNcpz8LENne',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'urlName',
            2 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'log-viewer::dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@index',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@index',
        'as' => 'log-viewer::dashboard',
        'namespace' => NULL,
        'prefix' => 'log-viewer',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'log-viewer::logs.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/logs',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@listLogs',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@listLogs',
        'as' => 'log-viewer::logs.list',
        'namespace' => NULL,
        'prefix' => 'log-viewer/logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'log-viewer::logs.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'log-viewer/logs/delete',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@delete',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@delete',
        'as' => 'log-viewer::logs.delete',
        'namespace' => NULL,
        'prefix' => 'log-viewer/logs',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'log-viewer::logs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/logs/{date}',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@show',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@show',
        'as' => 'log-viewer::logs.show',
        'namespace' => NULL,
        'prefix' => 'log-viewer/logs/{date}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'log-viewer::logs.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/logs/{date}/download',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@download',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@download',
        'as' => 'log-viewer::logs.download',
        'namespace' => NULL,
        'prefix' => 'log-viewer/logs/{date}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'log-viewer::logs.filter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/logs/{date}/{level}',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@showByLevel',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@showByLevel',
        'as' => 'log-viewer::logs.filter',
        'namespace' => NULL,
        'prefix' => 'log-viewer/logs/{date}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'log-viewer::logs.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'log-viewer/logs/{date}/{level}/search',
      'action' => 
      array (
        'middleware' => NULL,
        'uses' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@search',
        'controller' => 'Arcanedev\\LogViewer\\Http\\Controllers\\LogViewerController@search',
        'as' => 'log-viewer::logs.search',
        'namespace' => NULL,
        'prefix' => 'log-viewer/logs/{date}',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nhu3tWK9IEhCVjAD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@v1NnjLEcQ/ycn8bI8LS1T+uMp5yKTTgzZz4l9ov6QGQ=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005a4adcdb000000005e720b2c";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nhu3tWK9IEhCVjAD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1S6LEkM00m5tp6Ru' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":252:{@dV9WcZGdtEqV1iVW7vMPe02IJW7S4yUZYML4K4Cqmhw=.a:5:{s:3:"use";a:0:{}s:8:"function";s:40:"function () { return \\redirect(\'/es\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005a4adcdd000000005e720b2c";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::1S6LEkM00m5tp6Ru',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g35UYpbKGMN6he30' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Welcome@index',
        'controller' => 'App\\Http\\Controllers\\Welcome@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::g35UYpbKGMN6he30',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::759OVqNN8K5OgOGs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'IATA/{IATA}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Welcome@qIATA',
        'controller' => 'App\\Http\\Controllers\\Welcome@qIATA',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::759OVqNN8K5OgOGs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2iEH4ONBUycxNCEL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/gam',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GamExperiences@index',
        'controller' => 'App\\Http\\Controllers\\GamExperiences@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2iEH4ONBUycxNCEL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2uM97g4q2zbudVaj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/noticias',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\News@index',
        'controller' => 'App\\Http\\Controllers\\News@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2uM97g4q2zbudVaj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tZyWfqQFkM445IJ3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/biblioteca',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PoliticsLibrary@index',
        'controller' => 'App\\Http\\Controllers\\PoliticsLibrary@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::tZyWfqQFkM445IJ3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DspnWBvMISANqLos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/article/{urlName}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Articles@index',
        'controller' => 'App\\Http\\Controllers\\Articles@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::DspnWBvMISANqLos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2kl2inNcpz8LENne' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/article/{urlName}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Articles@update',
        'controller' => 'App\\Http\\Controllers\\Articles@update',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::2kl2inNcpz8LENne',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
