<?php
require_once dirname(__FILE__) . '/../bootstrap/unit.php';

$t = new lime_test(1, new lime_output_color());
$pitcher = new Pitcher();
$pitcher->action();
$batter = new Batter();
$batter->action();
$game = new Game();
$game->setPlayer($pitcher, $batter);
$game->judgment();
$finished = $game->isFinished();
$t->is($finished, false, 'まだ決着がついていないこと');
