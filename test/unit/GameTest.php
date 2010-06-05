<?php
require_once dirname(__FILE__) . '/../bootstrap/unit.php';

$t = new lime_test(12, new lime_output_color(true));
$t->diag('ストライク-見逃しの場合');
$pitcher = new Pitcher();
$pitcher->action('strike');
$batter = new Batter();
$batter->action('watch');
$game = new Game();
$game->setPlayer($pitcher, $batter);
$game->judgment();
$t->is($game->isFinished(), true, '決着がついたこと');
$t->is($pitcher->isWin(), true, '投手が勝利したこと');
$t->is($pitcher->fluctuateYen(), 2, '投手に2円ついたこと');

$t->diag('ストライク-スイングの場合');
$pitcher = new Pitcher();
$pitcher->action('strike');
$batter = new Batter();
$batter->action('swing');
$game = new Game();
$game->setPlayer($pitcher, $batter);
$game->judgment();
$t->is($game->isFinished(), true, '決着がついたこと');
$t->is($pitcher->isWin(), false, '投手が敗北したこと');
$t->is($pitcher->fluctuateYen(), -1, '投手に-1円ついたこと');

$t->diag('ボール-見逃しの場合');
$pitcher = new Pitcher();
$pitcher->action('ball');
$batter = new Batter();
$batter->action('watch');
$game = new Game();
$game->setPlayer($pitcher, $batter);
$game->judgment();
$t->is($game->isFinished(), true, '決着がついたこと');
$t->is($pitcher->isWin(), false, '投手が敗北したこと');
$t->is($pitcher->fluctuateYen(), -2, '投手に-2円ついたこと');

$t->diag('ボール-スイングの場合');
$pitcher = new Pitcher();
$pitcher->action('ball');
$batter = new Batter();
$batter->action('swing');
$game = new Game();
$game->setPlayer($pitcher, $batter);
$game->judgment();
$t->is($game->isFinished(), true, '決着がついたこと');
$t->is($pitcher->isWin(), true, '投手が勝利したこと');
$t->is($pitcher->fluctuateYen(), 2, '投手に2円ついたこと');
