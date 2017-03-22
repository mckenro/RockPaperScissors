<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Rock.php';

  session_start();
  if (empty($_SESSION[''])) {
    $_SESSION[''] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use($app) {
      return $app['twig']->render('index.html.twig');
  });

  $app->post("/rock", function() use($app) {
      $player_1_choice = $_POST['player_1_choice'];
      $player_2_choice = $_POST['player_2_choice'];
      $new_game = new Rock;
      return $app['twig']->render('index.html.twig', array('winner' => $new_game->playGame($player_1_choice, $player_2_choice)));
  });

  return $app;
?>
