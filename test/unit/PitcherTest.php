<?php
require_once dirname(__FILE__) . '/../bootstrap/unit.php';

$t = new lime_test(3, new lime_output_color(true));
$pitcher = new Pitcher();
$pitcher->action();
$batter = new Batter();
$batter->action();
$game = new Game();
$game->setPlayer($pitcher, $batter);
$game->judgment();
$t->is($game->isFinished(), true, '決着がついたこと');
$t->is($pitcher->isWin(), true, '投手が勝利したこと');
$t->is($pitcher->fluctuateYen(), 2, '投手に2円ついたこと');
