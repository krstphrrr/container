[Mon Apr 19 19:05:21.934012 2021] [php7:notice] [pid 19] [client 172.22.0.1:33218] 
PDOException: SQLSTATE[HY000] [2002] No such file or directory in /opt/drupal/web/core/lib/Drupal/Component/DependencyInjection/PhpArrayContainer.php on line 79 
#0 /opt/drupal/web/core/lib/Drupal/Core/Database/Driver/mysql/Connection.php(416): PDO->__construct('mysql:host=loca...', 'jornadanmsuedu', 'KR_JERange1912', Array)
#1 /opt/drupal/web/core/lib/Drupal/Core/Database/Database.php(374): Drupal\\Core\\Database\\Driver\\mysql\\Connection::open(Array)
#2 /opt/drupal/web/core/lib/Drupal/Core/Database/Database.php(169): Drupal\\Core\\Database\\Database::openConnection('default', 'default')
#3 [internal function]: Drupal\\Core\\Database\\Database::getConnection('default')
#4 /opt/drupal/web/core/lib/Drupal/Component/DependencyInjection/PhpArrayContainer.php(79): call_user_func_array('Drupal\\\\Core\\\\Dat...', Array)\n
#5 /opt/drupal/web/core/lib/Drupal/Component/DependencyInjection/Container.php(173): Drupal\\Component\\DependencyInjection\\PhpArrayContainer->createService(Array, 'database')\n
#6 /opt/drupal/web/core/lib/Drupal/Component/DependencyInjection/PhpArrayContainer.php(212): Drupal\\Component\\DependencyInjection\\Container->get('database', 1)\n
#7 /opt/drupal/web/core/lib/Drupal/Component/DependencyInjection/PhpArrayContainer.php(62): Drupal\\Component\\DependencyInjection\\PhpArrayContainer->resolveServicesAndParameters(Array)\n
#8 /opt/drupal/web/core/lib/Drupal/Component/DependencyInjection/Container.php(173): Drupal\\Component\\DependencyInjection\\PhpArrayContainer->createService(Array, 'cache.container')\n
#9 /opt/drupal/web/core/lib/Drupal/Core/DrupalKernel.php(544): Drupal\\Component\\DependencyInjection\\Container->get('cache.container')\n
#10 /opt/drupal/web/core/lib/Drupal/Core/DrupalKernel.php(910): Drupal\\Core\\DrupalKernel->getCachedContainerDefinition()\n
#11 /opt/drupal/web/core/lib/Drupal/Core/DrupalKernel.php(477): Drupal\\Core\\DrupalKernel->initializeContainer()\n
#12 /opt/drupal/web/core/lib/Drupal/Core/DrupalKernel.php(707): Drupal\\Core\\DrupalKernel->boot()\n
#13 /opt/drupal/web/index.php(19): Drupal\\Core\\DrupalKernel->handle(Object(Symfony\\Component\\HttpFoundation\\Request))\n
#14 {main}
PDOException: SQLSTATE [HY000] [2002] No such file
or directory in / opt / drupal / web / core / lib / Drupal / Component / DependencyInjection / PhpArrayContainer.php on line 79 
# 0 / opt / drupal / web / core / lib / Drupal / Core / Database / Driver / mysql / Connection.php(416): PDO->__construct(
  'mysql:host=loca...',
  'jornadanmsuedu',
  'KR_JERange1912',
  Array
) \ n 
# 1 / opt / drupal / web / core / lib / Drupal / Core / Database / Database.php(374): Drupal \ \ Core \ \ Database \ \ Driver \ \ mysql \ \ Connection::open(Array) \ n 
# 2 / opt / drupal / web / core / lib / Drupal / Core / Database / Database.php(169): Drupal \ \ Core \ \ Database \ \ Database::openConnection('default', 'default') \ n 
# 3 [internal function]: Drupal \ \ Core \ \ Database \ \ Database::getConnection('default') \ n 
# 4 / opt / drupal / web / core / lib / Drupal / Component / DependencyInjection / PhpArrayContainer.php(79): call_user_func_array('Drupal\\\\Core\\\\Dat...', Array) \ n 
# 5 / opt / drupal / web / core / lib / Drupal / Component / DependencyInjection / Container.php(173): Drupal \ \ Component \ \ DependencyInjection \ \ PhpArrayContainer->createService(Array, 'database') \ n 
# 6 / opt / drupal / web / core / lib / Drupal / Component / DependencyInjection / PhpArrayContainer.php(212): Drupal \ \ Component \ \ DependencyInjection \ \ Container->get('database', 1) \ n 
# 7 / opt / drupal / web / core / lib / Drupal / Component / DependencyInjection / PhpArrayContainer.php(62): Drupal \ \ Component \ \ DependencyInjection \ \ PhpArrayContainer->resolveServicesAndParameters(Array) \ n # 8 / opt / drupal / web / core / lib / Drupal / Component / DependencyInjection / Container.php(173): Drupal \ \ Component \ \ DependencyInjection \ \ PhpArrayContainer->createService(Array, 'cache.container') \ n # 9 / opt / drupal / web / core / lib / Drupal / Core / DrupalKernel.php(544): Drupal \ \ Component \ \ DependencyInjection \ \ Container->get('cache.container') \ n # 10 / opt / drupal / web / core / lib / Drupal / Core / DrupalKernel.php(910): Drupal \ \ Core \ \ DrupalKernel->getCachedContainerDefinition() \ n # 11 / opt / drupal / web / core / lib / Drupal / Core / DrupalKernel.php(477): Drupal \ \ Core \ \ DrupalKernel->initializeContainer() \ n # 12 / opt / drupal / web / core / lib / Drupal / Core / DrupalKernel.php(707): Drupal \ \ Core \ \ DrupalKernel->boot() \ n # 13 / opt / drupal / web / index.php(19): Drupal \ \ Core \ \ DrupalKernel->handle(
  Object(Symfony \ \ Component \ \ HttpFoundation \ \ Request)
) \ n #14 {main}